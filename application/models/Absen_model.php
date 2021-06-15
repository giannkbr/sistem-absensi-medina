<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absen_model extends CI_Model
{

	public function rekapData()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('jabatan', 'jabatan.jabatan_id = users.jabatan_id');
		$this->db->order_by('jabatan_nama', 'DESC');
		return $this->db->get();
	}

	public function getAbsenByid($id)
	{
		$this->db->select('*');
		$this->db->from('absen');
		$this->db->join('users', 'absen.nip = users.nip');
		$this->db->where('users.nip', $id);
		return $this->db->get()->result();
	}

	public function joinAbsen()
	{
		$this->db->select('*');
		$this->db->from('absen');
		$this->db->join('users', 'users.username = absen.username');
		$this->db->join('jabatan', 'jabatan.jabatan_id = users.jabatan_id');
		return $this->db->get();
	}

	public function tampilData()
	{
		return $this->db->get('absen');
	}


	public function absenWhere($where)
	{
		return $this->db->get_where('absen', $where);
	}

	public function whereTanggal($awal, $akhir, $nama)
	{

		// $this->db->query("SELECT * FROM absen WHERE tanggal BETWEEN  AND ;");
		$this->db->select('*');
		$this->db->from('absen');
		$this->db->where("tanggal BETWEEN '$awal' AND '$akhir'");
		$this->db->where("tanggal BETWEEN '$awal' AND '$akhir'");

		return $this->db->get();
	}
}

/* End of file ModelName.php */
