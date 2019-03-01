<?php
defined('BASEPATH') OR exit('No direct script access allowed');

public class model_pesan extends CI_Model{
    public function pesan($nama){
        $data = array(
            'nama' => $nama,
        );
    }
    public function getpesan(){
        $this->db->from('restoran');
        $query = this->db->get('pemesan');

        return $query->result();
    }

}


?>