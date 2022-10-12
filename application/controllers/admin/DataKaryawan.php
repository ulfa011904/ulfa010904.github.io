<?php

class dataKaryawan extends CI_Controller
{
    public function index()
    {

        $data['title'] = "Data Karyawan";

        $data['karyawan'] = $this->absensiKaryawan->get_data('data_karyawan')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataKaryawan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Tambah Data Karyawan";
        $data['karyawan'] = $this->absensiKaryawan->get_data('data_karyawan')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/formTambahKaryawan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        } else {
            $nik  = $this->input->post('nik');
            $nama_karyawan  = $this->input->post('nama_karyawan');
            $tanggal_masuk  = $this->input->post('tanggal_masuk');
            $jabatan  = $this->input->post('jabatan');
            $status  = $this->input->post('status');
            $photo  = $_FILES['photo']['name'];
            if ($photo = '') {
            } else {
                $config['upload_path'] = './assets/photo';
                $config['allowed_type'] = 'jpg|jpeg|png|tiff';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    echo "photo gagal di upload";
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }
            $data = array(
                'nik' => $nik,
                'nama_karyawan' => $nama_karyawan,
                'tanggal_masuk' => $tanggal_masuk,
                'jabatan' => $jabatan,
                'status' => $status,
                'photo' => $photo,
            );
            $this->absensiKaryawan->insert_data('$data', 'data_karyawan');
            $this->session->set_flashdata('massage', '<div class="alert alert-success alert-dismissible fade show" role="alert"><stong>Data berhasil ditambahkan</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span arial-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/dataKaryawan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawn', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('photo', 'photo', 'required');
    }
}
