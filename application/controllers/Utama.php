<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Konseling LPKKSK UKDW';
        $this->load->view('mahasiswa/teamplates/hd_utama', $data);
        $this->load->view('utama');
        $this->load->view('mahasiswa/teamplates/footer');
    }
}
