<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Absen_model', 'absen');
		$this->load->model('karyawan_model', 'karyawan');
		is_login();
	}

	public function index()
	{
		$data = [
			'title' => 'Data Absensi',
			'page' => 'admin/absensi/dataabsensi',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data Absensi',
			'data' => $this->absen->joinAbsen()->result_array()
		];

		$this->load->view('templates/app', $data, FALSE);
	}

	public function deleteAbsensi($id)
	{
		$this->db->delete('absen', ['id_absen' => $id]);
		$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Absensi Berhasil Dihapus!", "success");');
		redirect(base_url('data-absensi'));
	}

	public function getAbsenId($id)
	{
		$data = [
			'title' => 'Data Absensi',
			'page' => 'user/absensi/dataabsensi',
			'subtitle' => 'User',
			'subtitle2' => 'Data Absensi',
			'data' => $this->absen->getAbsenById($id)
		];

		$this->load->view('templates/app', $data, FALSE);
	}

	public function rekapAbsensi()
	{
		$data = [
			'title' => 'Rekap Absensi Perjabatan',
			'page' => 'admin/absensi/rekapabsensi',
			'subtitle' => 'Admin',
			'subtitle2' => 'Rekap Absensi Perjabatan',
			'user' => $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array(),
			'data' =>  $this->karyawan->tampilDataJabatan()->result_array()
		];

		$this->load->view('templates/app', $data, FALSE);
	}

	public function detailRekapAbsensi()
	{
		$data = [
			'title' => 'Rekap Absensi Perkaryawan',
			'page' => 'admin/absensi/detailrekapabsensi',
			'subtitle' => 'Admin',
			'subtitle2' => 'Rekap Absensi Perkaryawan',
			'nama' => $this->uri->segment(3),
			'user' => $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array(),
			'data' => $this->karyawan->karyawanWhere(['jabatan_id' => $this->uri->segment(3)])->result_array()
		];

		$this->load->view('templates/app', $data, FALSE);
	}

	public function rekapAbsensiPerKaryawan()
	{
		$data = [
			'title' => 'Rekap Absensi Karyawan',
			'page' => 'admin/absensi/rekapabsensiperkaryawan',
			'subtitle' => 'Admin',
			'subtitle2' => 'Rekap Absensi Karyawan',
			'nama' => $this->uri->segment(3),
			'user' => $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array(),
			'data' => $this->absen->absenWhere(['username' => $this->uri->segment(3)])->result_array()
		];

		$this->load->view('templates/app', $data);
	}

	public function rekapAbsensiPerOrangFilter()
	{
		$awal = $this->input->post('awal');
		$akhir = $this->input->post('akhir');
		$nama = $this->input->post('nama');

		$data = [
			'title' => 'Filter Rekap Absensi Karyawan',
			'page' => 'admin/absensi/rekapabsensiperkaryawanfilter',
			'subtitle' => 'Admin',
			'subtitle2' => 'Filter Rekap Absensi Karyawan',
			'user' => $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array(),
			'data' => $this->absen->whereTanggal($awal, $akhir, $nama)->result_array()
		];

		$this->load->view('templates/app', $data);
	}
}

/* End of file Absen.php */
