<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_id_level()
	{
		$this->db->select('idlevel, namalevel')->from('level');
		$res = $this->db->get();

		return $res->result();
	}
}