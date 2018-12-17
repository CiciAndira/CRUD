<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PegawaiModel extends CI_Model {
  public function view(){
    return $this->db->get('pegawai')->result();
  }
  
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('pegawai')->row();
  }

  public function validation($mode){
    $this->load->library('form_validation');
    
    if($mode == "save")
      $this->form_validation->set_rules('input_id', 'id', 'required|numeric|max_length[3]');
    
    $this->form_validation->set_rules('input_nama', 'nama', 'required|max_length[25]');
    $this->form_validation->set_rules('input_dept', 'dept', 'required|max_length[25]');
    $this->form_validation->set_rules('input_telp', 'telp', 'required|numeric|max_length[15]');
      
    if($this->form_validation->run())
      return TRUE; 
    else 
      return FALSE; 
  }
  
  public function save(){
    $data = array(
      "id" => $this->input->post('input_id'),
      "nama" => $this->input->post('input_nama'),
      "dept" => $this->input->post('input_dept'),
      "telp" => $this->input->post('input_telp')
    );
    
    $this->db->insert('pegawai', $data);
  }
  
  public function edit($id){
    $data = array(
      "id" => $this->input->post('input_id'),
      "nama" => $this->input->post('input_nama'),
      "dept" => $this->input->post('input_dept'),
      "telp" => $this->input->post('input_telp')
    );
    
    $this->db->where('id', $id);
    $this->db->update('pegawai', $data);
  }
  
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('pegawai');
  }
}