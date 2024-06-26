<?php
defined("BASEPATH") or exit ("no direct script access allowed");
class Web extends CI_Controller{
 function __construct(){
    parent::__construct();
 }
 public function cetak() 
{ 
 
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 
            'required|min_length[3]', [ 
            'required' => 'Kode Matakuliah Harus diisi', 
            'min_length' => 'Kode terlalu pendek' 
        ]); 
 
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 
            'required|min_length[3]', [ 
            'required' => 'Nama Matakuliah Harus diisi', 
            'min_length' => 'Nama terlalu pendek' 
        ]); 
 
        $this->form_validation->set_rules('sks', 'SKS Matakuliah', 
            'required|min_length[3]', [ 
            'required' => 'SKS Matakuliah Harus diisi', 
            'min_length' => 'SKS terlalu pendek' 
        ]); 

        if ($this->form_validation->run() != true) { 
            $this->load->view('view-form-matakuliah'); 
        } else { 
            $data = [ 
                'kode' => $this->input->post('kode'), 
                'nama' => $this->input->post('nama'), 
                'sks' => $this->input->post('sks') 
            ]; 
 
        $this->load->view('view-data-matakuliah', $data); 
        } 
    } 


}