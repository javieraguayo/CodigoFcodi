<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codifofacilito_model extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->database();
	}

	function crearcurso($data){//valor por parameto que llenara el arreglo

		$this->db->insert('cursos', array('nombreCurso' =>$data['nombre'],'videosCurso' => $data['videos']));//nombre de los arrgelos recibirDatos
	}
	function obtenercursos(){

		$query = $this->db->get('cursos');

		if ($query->num_rows() > 0 ) {
			return $query;
		}else{
			return false;
		}
	}
}
?>

