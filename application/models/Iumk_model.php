<?php

class Iumk_model extends CI_model
{
    public function getAllIumk()
    {
        // echo 'ok';
        // $query = $this->db->get('izin');
        // return $query->result_array();
        return $this->db->get('izin')->result_array();
    }

    public function tambahDataIumk()
    {
        $data = [
            "nama_pemohon"      => $this->input->post('nama_pemohon', true),
            "nik"               => $this->input->post('nik', true),
            "alamat_pemohon"    => $this->input->post('alamat_pemohon', true),
            "no_telpon"         => $this->input->post('telpon', true),
            "nama_usaha"        => $this->input->post('nama_usaha', true),
            "npwp"              => $this->input->post('npwp', true),
            "sarana_usaha"      => $this->input->post('sarana_usaha', true),
            "jenis_usaha"       => $this->input->post('jenis_usaha', true),
            "alamat_usaha"      => $this->input->post('alamat_usaha', true),
            "modal_usaha"       => $this->input->post('modal_usaha', true),
            "no_rekomendasi"    => $this->input->post('rekomendasi', true)
        ];

        $this->db->insert('izin', $data);
    }

    public function hapusDataIumk($no)
    {
        // $this->db->where('no', $no);
        // $this->db->delete('izin');

        $this->db->delete('izin', ['no' => $no]);
    }

    public function getIzinByNumber($no)
    {
        return $this->db->get_where('izin', ['no' => $no])->row_array();
    }

    public function ubahDataIumk()
    {
        $data = [
            "nama_pemohon"      => $this->input->post('nama_pemohon', true),
            "nik"               => $this->input->post('nik', true),
            "alamat_pemohon"    => $this->input->post('alamat_pemohon', true),
            "no_telpon"         => $this->input->post('telpon', true),
            "nama_usaha"        => $this->input->post('nama_usaha', true),
            "npwp"              => $this->input->post('npwp', true),
            "sarana_usaha"      => $this->input->post('sarana_usaha', true),
            "jenis_usaha"       => $this->input->post('jenis_usaha', true),
            "alamat_usaha"      => $this->input->post('alamat_usaha', true),
            "modal_usaha"       => $this->input->post('modal_usaha', true),
            "no_rekomendasi"    => $this->input->post('rekomendasi', true)
        ];

        $this->db->where('no', $this->input->post('no'));
        $this->db->update('izin', $data);
    }
}