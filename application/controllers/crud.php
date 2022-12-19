<?php 

class Crud extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	
	}
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function input(){
		$this->load->view('v_input');
	}

	function aksi(){
		$nama = $this->input->post('nama');
		$komentar = $this->input->post('komentar');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
			'nama' => $nama,
			'komentar' => $komentar,
			'pekerjaan' => $pekerjaan
		);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$komentar = $this->input->post('komentar');
		$pekerjaan = $this->input->post('pekerjaan');
	
		$data = array(
			'nama' => $nama,
			'komentar' => $komentar,
			'pekerjaan' => $pekerjaan
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_data->update_data($where,$data,'user');
		redirect('crud/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}
}