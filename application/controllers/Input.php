<?php

class Input extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Iumk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Form Tambah Data";

        $this->form_validation->set_rules('nama_pemohon', ' "Nama Pemohon" ', 'required');
        $this->form_validation->set_rules('nik', ' "Nomor Induk Kependudukan" ', 'required|numeric');
        $this->form_validation->set_rules('alamat_pemohon', ' "Alamat Tinggal" ', 'required');
        $this->form_validation->set_rules('telpon', ' "Nomor Telpon" ', 'required|numeric');
        $this->form_validation->set_rules('nama_pemohon', ' "Nama Pemohon" ', 'required');
        $this->form_validation->set_rules('nama_usaha', ' "Nama Usaha" ', 'required');
        $this->form_validation->set_rules('nama_pemohon', ' "Nama Pemohon" ', 'required');
        $this->form_validation->set_rules('npwp', ' "Nomor Pokok Wajib Pajak" ', 'required|numeric');
        $this->form_validation->set_rules('nama_pemohon', ' "Nama Pemohon" ', 'required');
        $this->form_validation->set_rules('sarana_usaha', ' "Sarana Usaha" ', 'required');
        $this->form_validation->set_rules('jenis_usaha', ' "Jenis Usaha" ', 'required');
        $this->form_validation->set_rules('alamat_usaha', ' "Alamat Usaha" ', 'required');
        $this->form_validation->set_rules('modal_usaha', ' "Modal Usaha" ', 'required|numeric');
        $this->form_validation->set_rules('rekomendasi', ' "Nomor Rekomendasi" ', 'required');

        if( $this->form_validation->run() == FALSE )
        {
            $this->load->view('templates/header', $data);
            $this->load->view('input/index');
            $this->load->view('templates/footer');
        } else {
            $this->Iumk_model->tambahDataIumk();
            $this->session->set_flashdata('flashTambah', 'Ditambahkeun');
            redirect('input');
        }
    }
}