<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Konseling LPKKSK UKDW';
        $this->load->view('mahasiswa/teamplates/hd_utama', $data);
        $this->load->view('login');
        $this->load->view('mahasiswa/teamplates/footer');
    }
}
