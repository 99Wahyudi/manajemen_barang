<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status')!='admin') {
			redirect('Auth');
		}
	}
	public function index()
	{
		$data['barang']=$this->Main_model->get_all('barang');
		// var_dump($data);
		$this->load->view('admin/barang.php', $data);
	}

	public function tambah(){
		// echo "tambah"; die();
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$spesifikasi =  $this->input->post('spesifikasi');
		$tgl_masuk =  $this->input->post('tgl_masuk');
		$suplier = $this->input->post('suplier');
		$harga=$this->input->post('harga');
		$data=[
			'nama' => $nama,
			'kode' => $kode,
			'spesifikasi' => $spesifikasi,
			'tgl_masuk' => $tgl_masuk,
			'suplier' => $suplier,
			'harga_beli' => $harga
		];
		$this->Main_model->insert('barang',$data);
		redirect(base_url('Admin'));
	}

	public function delete($id){
		$this->Main_model->delete('barang', ['id'=>$id]);
		redirect(base_url('Admin'));
	}

	public function edit($id){
		$data['barang']=$this->Main_model->get_one('barang', ['id'=>$id]);
		// var_dump($data); die();
		$this->load->view('admin/edit', $data);
	}

	public function update(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$spesifikasi =  $this->input->post('spesifikasi');
		$tgl_masuk =  $this->input->post('tgl_masuk');
		$suplier = $this->input->post('suplier');
		$harga=$this->input->post('harga');

		$data=[
			'nama' => $nama,
			'kode' => $kode,
			'spesifikasi' => $spesifikasi,
			'tgl_masuk' => $tgl_masuk,
			'suplier' => $suplier,
			'harga_beli' => $harga
		];

		$this->Main_model->update('barang', ['id'=>$id], $data);
		redirect(base_url('Admin'));
	}

	public function printExcel(){
		$data['barang']=$this->Main_model->get_all('barang');
		// echo count($data['choosers']); die();
		$this->load->view('admin/data_excel.php',$data);
	}

	public function logout(){
		session_destroy();
		redirect(base_url());
	}
}