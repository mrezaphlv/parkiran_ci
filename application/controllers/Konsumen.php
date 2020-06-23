<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {
	function __construct(){
parent::__construct();
  $this->load->model('Konsumen_m');
}
	public function index()
	{
		  $data['konsumen'] = $this->Konsumen_m->getdata()->result();
    
		$this->load->view('v_konsumen',$data);
	}
	function add_exe(){
		 $isi = array(
      'nama'=> $this->input->post('nama'),
      'jenis_kendaraan' => $this->input->post('jenis_kendaraan'),
      'no_polisi' => $this->input->post('no_polisi'),
      'tanggal_lahir' => $this->input->post('tgl_lahir'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'no_hp' => $this->input->post('no_hp'));
    $masuk = $this->Konsumen_m->input_data($isi,'konsumen');
if($masuk = true){
  redirect('Konsumen');
}
	}
	public function edit_exe(){
		$id_b = $this->input->post('idd');
		$whr = array('id' => $id_b);
   $upd = array(
      'nama'=> $this->input->post('ed_nama'),
      'jenis_kendaraan' => $this->input->post('ed_jenis_kendaraan'),
      'no_polisi' => $this->input->post('ed_no_polisi'),
      'tanggal_lahir' => $this->input->post('ed_tgl_lahir'),
      'jenis_kelamin' => $this->input->post('ed_jenis_kelamin'),
      'no_hp' => $this->input->post('ed_no_hp'));
    $updat = $this->Konsumen_m->update($whr,$upd);
    if ($updat = true) {
     $this->session->set_flashdata('berhasil', 'anda berhasil edit data');
    redirect('Barang');
    }
	}
	function delete($idd){
    $data=$this->Konsumen_m->hapus($idd);
    if ($data) {
    //$sflash = $this->session->set_flashdata('berhasil', 'anda berhasil menghapus data');
    redirect('Konsumen');
    }

    //echo json_encode($data);
    // if ($data) {
    //  echo json_encode(array('message'=> $sflash));
  }
}
