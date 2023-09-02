<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homekonselor extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Konseling LPKKSK UKDW';
        $this->load->view('mahasiswa/teamplates/header', $data);
        $this->load->view('konselor/v_homekonselor');
        $this->load->view('mahasiswa/teamplates/footer');
    }
}
