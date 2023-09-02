<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selesai extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Konseling LPKKSK UKDW';
        $this->load->view('mahasiswa/teamplates/header', $data);
        $this->load->view('mahasiswa/v_selesai');
        $this->load->view('mahasiswa/teamplates/footer');
    }
}
