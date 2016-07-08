<?php

defined('BASEPATH') OR exit('NO direct script acess allowed');

class Institucional extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->output->cache(1440);//Corresponde a 24 horas até o cache ser atualizado

    }
    
    public function index() {       
        $data['title'] = "MyApk | Home";
        $data['description'] = "Tenha seu próprio aplicativo";
        
        $this->load->view('commons/header');
        $this->load->view('home',$data);
        $this->load->view('commons/footer');
    }

    public function Empresa() {        
        $data['title'] = "MyApk | A Empresa";
        $data['description'] = "Informações sobre a empresa";
        
        $this->load->view('commons/header');
        $this->load->view('empresa',$data);
        $this->load->view('commons/footer');
    }
    
    public function Servicos(){       
        $data['title'] = "MyApk | Serviços";
        $data['description'] = "Informações sobre os serviços prestados";
        
        $this->load->view('commons/header');
        $this->load->view('servicos',$data);
        $this->load->view('commons/footer');
    }

}
