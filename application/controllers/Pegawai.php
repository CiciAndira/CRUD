<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pegawai extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('PegawaiModel');
  }
  
  public function index(){
    $data['pegawai'] = $this->PegawaiModel->view();
    $this->load->view('pegawai/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ 
      if($this->PegawaiModel->validation("save")){ 
        $this->PegawaiModel->save();
        redirect('pegawai');
      }
    }
    
    $this->load->view('pegawai/tambah_data');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){
      if($this->PegawaiModel->validation("update")){
        $this->PegawaiModel->edit($id);
        redirect('pegawai');
      }
    }
    
    $data['pegawai'] = $this->PegawaiModel->view_by($id);
    $this->load->view('pegawai/edit_data', $data);
  }
  
  public function hapus($id){
    $this->PegawaiModel->delete($id);
    redirect('pegawai');
  }
}