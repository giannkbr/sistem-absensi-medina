<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	function absendaily($id, $tahun, $bulan, $hari)
	{
		$this->db->select('*');
		$this->db->from('absen');
		$this->db->where('username', $id);
		$this->db->where('year(tanggal)', $tahun);
		$this->db->where('month(tanggal)', $bulan);
		$this->db->where('day(tanggal)', $hari);
		return $this->db->get();
	}
}

/* End of file ModelName.php */
