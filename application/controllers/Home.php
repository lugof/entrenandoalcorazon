<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->helper('url');	
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model("Panel_model");
		
		
	}

	public function contacto(){
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('footer');
	}

	public function signup(){
		$this->load->view("header");
		$this->load->view("signup");
		$this->load->view("footer");
	}


	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function login()
	{
		if($this->session->userdata('logueado')){
			$this->load->view('header');
			$this->load->view('videos');
			$this->load->view('footer');
			

		}else{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			
		}
	}





	public function iniciar_sesion_post() {

		$usuario = $this->input->post('usuario');
		$contrasena = $this->input->post('contrasena');

		$usuario = $this->Panel_model->usuario_login($usuario, $contrasena);
		if ($usuario){
			$usuario_data = array(
				'id_usuario' => $usuario->id_usuario,
				'u_nombre' => $usuario->usuario,
				'logueado' => TRUE
			);
			$this->session->set_userdata($usuario_data);
			redirect('home/login');
		}
		else{
			$data['datos_incorrectos'] = "Usuario y/o contraseña incorrectos";
			$data['logueado'] = $this->session->userdata('logueado');
			$this->load->view('header');
			$this->load->view('login',  $data);
			$this->load->view('footer');
			
		}

	}


	public function cerrar_sesion() {
		$usuario_data = array(
			'logueado' => FALSE
		);
		$this->session->set_userdata($usuario_data);
		redirect('home/login');
	}







}
