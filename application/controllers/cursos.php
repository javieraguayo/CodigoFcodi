<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function __construct()
    {

        parent::__construct();
        $this->load->helper('mihelper'); //buscar al helper
        $this->load->helper('form'); //cargamos el helper
        $this->load->model('codifofacilito_model'); //cargamos el modelo
    }

    function index(){
        $data ['cursos'] = $this->codifofacilito_model->obtenercursos();//obetner datos del modelo
        $this->load->view('codigofacilito/headers'); //cargamos el encabezado
        $this->load->view('cursos/cursos', $data);

    }
     public function nuevo() //colocamos en la url el metodo para llamar a la vista
    {
        $this->load->view('codigofacilito/headers'); //cargamos el encabezado
        $this->load->view('cursos/formulario');
    }
        

    
     function recibirdatos(){//encargado de recibir los datos por el metodo post "arrgelo asociativo"

     	$data = array(
     		'nombre' => $this->input->post('nombre'),
     		'videos' => $this->input->post('videos')

     		);
     	$this->codifofacilito_model->crearcurso($data);//llamamos al metodo que creamos en el modelo
     	 $this->load->view('codigofacilito/headers'); //cargamos el encabezado
        $this->load->view('cursos/formulario');
     }

}
?>
