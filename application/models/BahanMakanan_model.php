<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BahanMakanan_model extends CI_Model
{
    // Ambil semua data
    public function getAll()
    {
        return $this->db->get('bahan_makanan')->result_array();
    }

    // Ambil data berdasarkan ID
    public function getById($id)
    {
        return $this->db->get_where('bahan_makanan', ['id_bahan' => $id])->row_array();
    }

    // Tambah data baru
    public function insert($data)
    {
        $this->db->insert('bahan_makanan', $data);
    }

    // Update data
    public function update($id, $data)
    {
        $this->db->where('id_bahan', $id);
        $this->db->update('bahan_makanan', $data);
    }

    // Hapus data
    public function delete($id)
    {
        $this->db->where('id_bahan', $id);
        $this->db->delete('bahan_makanan');
    }
}
