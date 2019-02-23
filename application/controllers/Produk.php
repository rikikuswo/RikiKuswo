<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index(){
		$data['page'] = "Produk/form";
		$this->load->view('main',$data);
	}

		public function submit()
	{	
		$this->load->model('Produk_model');

		$produk = $this->input->post();
		$produk['produkId'] = "PR002";

		$this->Produk_model->add($produk);
		
	}
}