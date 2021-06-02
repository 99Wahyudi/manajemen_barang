<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function insert($table, $value)
	{
		$this->db->insert($table, $value);
	}

	public function get_one($table, $where){
		$data = $this->db->get_where($table, $where)->row_array();
		return $data;
	}

	public function get_all($table, $where='')
	{
		$data = $this->db->get($table, $where)->result_array();
		return $data;
	}

	public function delete($table,$where)
	{
		$this->db->delete($table,$where);
	}

	public function update($table, $where, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
