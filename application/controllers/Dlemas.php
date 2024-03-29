<?php
class Dlemas extends CI_Controller
{ 
public function index() 
{ 
$this->load->view('view-form-dlemas'); 
}
    public function cetak()
        { 
        $data = [ 
            'namasiswa' => $this->input->post('namasiswa'), 
            'nis' => $this->input->post('nis'), 
            'kelas' => $this->input->post('kelas'),
            'tgllahir' => $this->input->post('tgllahir'),
            'tmptlahir' => $this->input->post('tmptlahir'),
            'alamat' => $this->input->post('alamat'),
            'jeniskl' => $this->input->post('jeniskl'),
            'agama' => $this->input->post('agama'),
            ]; 
        
    $this->load->view('view-hasil-dlemas', $data); 
        } 
    }