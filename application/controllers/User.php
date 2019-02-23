<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		$this->load->model('User_model','usmod');
		$data = $this->usmod->get_id_level();
		foreach ($user as $key => $value) {
			$data_user[$key] = $value->namalevel;
		}
		$data['user'] = $data_user;
		$data['page'] = "user/user_form";
  		$this->load->view('main',$data);
	}
}