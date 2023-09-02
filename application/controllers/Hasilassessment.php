<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasilassessment extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Konseling LPKKSK UKDW';
        $this->load->view('mahasiswa/teamplates/header', $data);
        $this->load->view('mahasiswa/v_hasilassessment');
        $this->load->view('mahasiswa/teamplates/footer');
    }
}
