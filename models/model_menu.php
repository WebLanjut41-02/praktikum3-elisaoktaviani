<?php

	class model_menu extends CI_Model(){
		function tampil(){
			$data=$this->db->query("SELECT * FROM MENU");
			return $data;
		}
	}


?>