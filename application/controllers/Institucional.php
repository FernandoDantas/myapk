<?php

defined('BASEPATH') OR exit('NO direct script acess allowed');

class Institucional extends CI_Controller {

    public function index() {
        $this->load->view('commons/header');
        $this->load->view('home');
        $this->load->view('commons/footer');
    }

    public function Empresa() {
        $this->load->view('commons/header');
        $this->load->view('empresa');
        $this->load->view('commons/footer');
    }
    
    public function Servicos(){
        $this->load->view('commons/header');
        $this->load->view('servicos');
        $this->load->view('commons/footer');
    }

}
