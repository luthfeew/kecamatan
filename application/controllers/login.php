<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Model_publikasi');
	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->Model_publikasi->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/dashboard/listberita"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}