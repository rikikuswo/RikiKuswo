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
		$this->load->helper('autoid');
		$table = 'produk';
		$fields = 'produkId';
		$inisial = 'PR';
	$id_produk = $this->input->post('idProduk');
	if ($id_produk =='') {
		$id_prod = get_id($fields, $table, $inisial);
		$produk = array (
			'produkId' => $id_prod,
			'namaProduk' => $this->input->post('namaProduk'),
			'harga' => $this->input->post('harga'),
			'satuan' => $this->input->post('satuan'),
			'qty' => $this->input->post('qty'),
			'image' => $this->input->post('image'),
			'deskripsi' => $this->input->post('deskripsi')
		);
		$this->Produk_model->add($produk);
	} else {
		$data = array(
			'namaProduk' => $this->input->post('namaProduk'),
			'harga' => $this->input->post('harga'),
			'satuan' => $this->input->post('satuan'),
			'qty' => $this->input->post('qty'),
			'image' => $this->input->post('image'),
			'deskripsi' => $this->input->post('deskripsi')
		);

		$this->Produk_model->update($id_produk,$data);
		}
	}

	public function show_list_produk()
	{
		$data['page']= "produk/list_produk";
		$this->load->model('Produk_model');
		$data["produk"] = $this->Produk_model->get_produk();
		$this->load->view('main',$data);
	}

	public function hapus_produk()
	{
		$this->load->model('Produk_model');
		$id_produk = $this->uri->segment(3);
		$this->Produk_model->hapus_produk($id_produk);
	}

	public function edit_produk()
	{
		$id_produk = $this->uri->segment(3);
		$this->load->model('Produk_model');
		$data["data_produk"] = $this->Produk_model->get_produk_detail($id_produk);
		$data['page'] = "produk/form";
		$this->load->view('main',$data);
	}
}