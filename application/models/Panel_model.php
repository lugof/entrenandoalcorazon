<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_model extends CI_Model {

	function __construct(){

		parent::__construct();
		$this->load->database();
	}

	function usuario_login($usuario, $contrasena){
		$this->db->select('id_usuario, usuario, contrasena');
		$this->db->from('usuarios');
		$this->db->where('usuario', $usuario);
		$this->db->where('contrasena', $contrasena);
		$query = $this->db->get();
		return $query->row();
	}

	
}

?>
