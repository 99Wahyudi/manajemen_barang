<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$info = $this->Main_model->get_one('admin', ["username" => $username]);
		if (!empty($info)) {
			if (password_verify($password, $info['password'])) {
				$data = [
					'username'=>$info['username'],
					'status'=>'admin'
				];
				$this->session->set_userdata($data);
				redirect('Admin');
			}else{
				$this->session->set_flashdata('message',
				'<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
				  Password Salah
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>'
				);
				redirect(base_url('Auth'));

			}
		}else{
			$this->session->set_flashdata('message',
				'<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
				  Username Salah
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>'
			);
			redirect(base_url('Auth'));
		}
	}

	// public function add_admin(){
	// 	$username = 'admin';
	// 	$password = password_hash('admin', PASSWORD_DEFAULT);
	// 	$data=[
	// 		'username' => $username,
	// 		'password' => $password
	// 	];
	// 	$this->Main_model->insert('admin',$data);
	// }
}
