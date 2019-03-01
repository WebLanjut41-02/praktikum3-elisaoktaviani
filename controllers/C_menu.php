<?php

class C_menu extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_menu');
	}

	function index(){
		$daftar['data']=$this->model_makanan->show_menu();
		$this->load->view('showmenu',$daftar);
	}
}
?>