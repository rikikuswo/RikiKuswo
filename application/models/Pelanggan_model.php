<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {
	var $table = "pelanggan";

	function add($pelanggan){
		$this->db->insert($this->table,$pelanggan);

		if ($this->db->affected_rows()>0) {
			redirect('pelanggan/index');
		}
	}

	public function update($id_pelanggan, $data)
	{
		$this->db->where('pelangganId',$id_pelanggan);
		$this->db->update($this->table,$data);
		if ($this->db->affected_rows()>0) {
			redirect('pelanggan/show_list_pelanggan');
		}
	}

	public function get_pelanggan()
	{
		$this->db->select('*')->from('pelanggan');
		$res = $this->db->get();

		return $res->result();
	}

	public function hapus_pelanggan($id_pelanggan)
	{
		$this->db->where('pelangganId',$id_pelanggan);
		$this->db->delete('pelanggan');

		if ($this->db->affected_rows()>0) {
			redirect('pelanggan/show_list_pelanggan');
		}
	}

	public function get_pelanggan_detail($id_pelanggan)
	{
		$this->db->select('*')->from('pelanggan');
		$this->db->where('pelangganId',$id_pelanggan);
		$res = $this->db->get();

		return $res->result();
	}
}