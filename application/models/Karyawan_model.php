<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
	public function karyawanWhere($where)
	{
		return $this->db->get_where('users', $where);
	}

	public function tampilData()
	{
		return $this->db->get('users');
	}

	public function tampilDataJabatan()
	{
		return $this->db->get('jabatan');
	}
}

/* End of file Karyawan_model.php */
