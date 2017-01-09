<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Codigofacilito extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper('mihelper'); //buscar al helper
        $this->load->helper('form'); //cargamos el helper
        $this->load->model('codifofacilito_model'); //cargamos el modelo
    }
    public function index()
    {
        $this->load->library('menu', array('Inicio', 'contacto', 'cursos'));
        $data['mi_menu'] = $this->menu->construirMenu(); //menu llenamos el arreglo
        $data['string']  = 'Hola sadfasdfasdf';
        $this->load->view('codigofacilito/headers'); //multiples layaut
        $this->load->view('codigofacilito/bienvenido', $data); //siempre especificar la rut relativa
    }

    public function holaMundo() ///CodeIgniter/index.php/codigofacilito/nuevo siempre index.php

    {

        $data['string'] = 'Hola sadfasdfasdf';
        $this->load->view('codigofacilito/headers'); //cargamos dos vistas en un solo metodo usando una plantilla
        $this->load->view('codigofacilito/bienvenido', $data);
    }

   
}
