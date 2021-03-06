SELECT 
    IF(gen.nombrecorto IS NULL OR gen.nombrecorto='',gen.razonsocial,gen.nombrecorto) AS Item,
    COUNT(DISTINCT idmanifiesto, idgenerador, fecha) AS Cantidad
FROM
    manifiesto AS man
        INNER JOIN
    relgenman USING (idmanifiesto)
        INNER JOIN
    generador AS gen USING (idgenerador)
__WHR__ AND 
    YEAR(man.fecha) = IF(MONTH(CURDATE()) = 1 OR MONTH(CURDATE()) = 2, YEAR(CURDATE()) - 1, YEAR(CURDATE()))
        AND MONTH(man.fecha) = IF(MONTH(CURDATE()) = 1,
			11,
			IF(MONTH(CURDATE()) = 2, 12, MONTH(CURDATE()) - 2))
	AND ((motivo IS NOT NULL AND motivo != '') OR idmanifiesto IN (SELECT idmanifiesto FROM relmanrec))
GROUP BY gen.razonsocial
ORDER BY Cantidad Desc