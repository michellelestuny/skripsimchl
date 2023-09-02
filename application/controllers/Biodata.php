<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Konseling LPKKSK UKDW';

        // $this->form_validation->set_rules('namalengkap', 'Nama', 'required');

        //  if ($this->form_validation->run() == FALSE) {
        $this->load->view('mahasiswa/teamplates/header', $data);
        $this->load->view('mahasiswa/v_biodata');
        $this->load->view('mahasiswa/teamplates/footer');
        // } else {
        //   echo "berhasil";
        //  }
    }
}
