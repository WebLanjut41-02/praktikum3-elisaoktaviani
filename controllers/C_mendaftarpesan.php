<?php

class C_mendaftarpesan extends CI_Controller {
         public function __construct()
         {
        parent::__construct();
        $this->load->model('model_pesan');
         }

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('nama','Nama','required');
                $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[5]|max_length[25]');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('mendaftar_pesan');
                }
                else
                {
                        $this->load->view('showmenu');
                }
        }


}