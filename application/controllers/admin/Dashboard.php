<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $karyawan = $this->db->query("SELECT * FROM data_karyawan");
        $admin = $this->db->query("SELECT * FROM data_karyawan WHERE jabatan = 'Admin'");
        $absensi = $this->db->query("SELECT * FROM data_absensi");
        $data['karyawan'] = $karyawan->num_rows();
        $data['admin'] = $admin->num_rows();
        $data['absensi'] = $absensi->num_rows();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
