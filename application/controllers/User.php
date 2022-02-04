<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('UserModel');
	}
	
	public function index()
	{
		$title['title'] = 'dashboard';
		$data = $this->UserModel->getCrud();
		$this->load->view('templates/auth_header', $title);
		$this->load->view('crud/index', ['data' => $data]);
		$this->load->view('templates/auth_footer');
	}
	
	public function error()
	{
		$this->load->view('crud/error');
	}

	public function login()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function registration()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('auth/registration');
		$this->load->view('templates/auth_footer');
	}

	public function create()
	{
		$title['title'] = 'Form tambah data';
		$this->load->view('templates/auth_header', $title);
		$this->load->view('crud/create');
		$this->load->view('templates/auth_footer');
	}

	public function create_action()
	{
		if ($this->UserModel->save()){
			redirect(base_url('user/create'));
		} else {
			redirect(base_url('user/error'));
		}
	}

	public function edit($id)
	{
		$title = [
			'title' => 'Form edit data'
		];
		$data = $this->UserModel->getData($id);
        $this->load->view('templates/auth_header', $title);
		$this->load->view('crud/edit', ['data' => $data]);
        $this->load->view('templates/auth_footer');
	}

	public function edit_action($id)
	{
		if ($this->UserModel->edit($id)){
			redirect(base_url('user/edit/'. $id));
		} else {
			redirect(base_url('user/error'));
		}
	}

	public function delete($id)
	{
		if ($this->UserModel->delete($id)){
			redirect(base_url('user'));
		}
	}
}
