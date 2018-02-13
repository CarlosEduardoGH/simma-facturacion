<?php

class Cfdi_concepto_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_concepto" );
		$objeto = new Modcfdi_concepto();
		var_dump( $objeto );
		
		$objeto->Idcfdi_concepto("1");
		$objeto->Idcfdi_comprobante("2");
		$objeto->Claveprodserv("111");
		$objeto->Claveprodserv_sat_id("24131513");
		$objeto->Claveprodserv_sat_txt("Refrigerante");
		$objeto->Noidentificacion("uhvvu4432");
		$objeto->Cantidad("13.4");
		$objeto->Claveunidad("121");
		$objeto->Claveunidad_sat_id("E48");
		$objeto->Claveunidad_sat_txt("Unidad de servicio");
		$objeto->Unidad("hjj43");
		$objeto->Descripcion("estohacemferw");
		$objeto->Valorunitario("12.1");
		$objeto->Importe("1.2");
		$objeto->Descuento("1.3");
		$objeto->Cuentapredial_numero("hgvchfgyi3432");
	
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_concepto" );
		$objeto = new Modcfdi_concepto();

		$objeto->Idcfdi_concepto("1");
		$objeto->Idcfdi_comprobante("2");
		$objeto->Claveprodserv("111");
		$objeto->Claveprodserv_sat_id("24131513");
		$objeto->Claveprodserv_sat_txt("Refrigerante");
		$objeto->Noidentificacion("uhvvu4432");
		$objeto->Cantidad("13.4");
		$objeto->Claveunidad("121");
		$objeto->Claveunidad_sat_id("E48");
		$objeto->Claveunidad_sat_txt("Unidad de servicio");
		$objeto->Unidad("hjj43");
		$objeto->Descripcion("estohacemferw");
		$objeto->Valorunitario("12.1");
		$objeto->Importe("1.2");
		$objeto->Descuento("1.3");
		$objeto->Cuentapredial_numero("hgvchfgyi3432");

		var_dump( "getIdcfdi_concepto", $objeto->getIdfcdi_concepto() );
		var_dump( "getIdcfdi_comprobante", $objeto->getIdcfdi_comprobante() );
		var_dump( "getClaveprodserv", $objeto->getClaveprodserv() );
		var_dump( "getClaveprodserv_sat_id", $objeto->getClaveprodserv_sat_id() );
		var_dump( "getClaveprodserv_sat_txt", $objeto->getClaveprodserv_sat_txt() );
		var_dump( "getNoidentificacion", $objeto->getNoidentificacion() );
		var_dump( "getCantidad", $objeto->getCantidad() );
		var_dump( "getClaveunidad", $objeto->getClaveunidad() );
		var_dump( "getClaveunidad_sat_id", $objeto->getClaveunidad_sat_id() );
		var_dump( "getClaveunidad_sat_txt", $objeto->getClaveunidad_sat_txt() );
		var_dump( "getUnidad", $objeto->getUnidad() );
		var_dump( "getDescripcion", $objeto->getDescripcion() );
		var_dump( "getValorunitario", $objeto->getValorunitario() );
		var_dump( "getImporte", $objeto->getImporte() );
		var_dump( "getDescuento", $objeto->getDescuento() );
		var_dump( "getCuentapredial_numero", $objeto->getCuentapredial_numero() );
	}
	function test_add() {
		$this->load->model( "modcfdi_concepto" );
		$objeto = new Modcfdi_concepto();

		$objeto->Idcfdi_comprobante("2");
		$objeto->Claveprodserv("111");
		$objeto->Claveprodserv_sat_id("24131513");
		$objeto->Claveprodserv_sat_txt("Refrigerante");
		$objeto->Noidentificacion("uhvvu4432");
		$objeto->Cantidad("13.4");
		$objeto->Claveunidad("121");
		$objeto->Claveunidad_sat_id("E48");
		$objeto->Claveunidad_sat_txt("Unidad de servicio");
		$objeto->Unidad("hjj43");
		$objeto->Descripcion("estohacemferw");
		$objeto->Valorunitario("12.1");
		$objeto->Importe("1.2");
		$objeto->Descuento("1.3");
		$objeto->Cuentapredial_numero("hgvchfgyi3432");
		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_comprobante() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_concepto" );
		$objeto = new Modcfdi_concepto();
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_concepto" );
		$objeto = new Modcfdi_concepto();
		$objeto->getFromDatabase( $id );

		$objeto->Idcfdi_comprobante("2");
		$objeto->Claveprodserv("111");
		$objeto->Claveprodserv_sat_id("24131513");
		$objeto->Claveprodserv_sat_txt("Refrigerante");
		$objeto->Noidentificacion("uhvvu4432");
		$objeto->Cantidad("13.4");
		$objeto->Claveunidad("121");
		$objeto->Claveunidad_sat_id("E48");
		$objeto->Claveunidad_sat_txt("Unidad de servicio");
		$objeto->Unidad("hjj43");
		$objeto->Descripcion("estohacemferw");
		$objeto->Valorunitario("12.1");
		$objeto->Importe("1.2");
		$objeto->Descuento("1.3");
		$objeto->Cuentapredial_numero("hgvchfgyi3432");

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_concepto" );
		$objeto = new Modcfdi_concepto();
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_concepto" );
		$objeto = new Modcfdi_concepto();
		var_dump( $objeto->getAll() );
	}
}

?>