<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BahanMakanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BahanMakanan_model');
    }

    // Tampilkan semua data
    public function index()
    {
        $data['bahan_makanan'] = $this->BahanMakanan_model->getAll();
        $this->load->view('templates/header');
        $this->load->view('bahan_makanan/index', $data);
        $this->load->view('templates/footer');
    }

    // Tambah data baru
    public function tambah()
    {
        if ($this->input->post()) {
            $this->BahanMakanan_model->insert($this->input->post());
            redirect('bahanmakanan');
        }
        $this->load->view('templates/header');
        $this->load->view('bahan_makanan/tambah');
        $this->load->view('templates/footer');
    }

    // Edit data berdasarkan ID
    public function edit($id)
    {
        $data['bahan'] = $this->BahanMakanan_model->getById($id);

        if ($this->input->post()) {
            $this->BahanMakanan_model->update($id, $this->input->post());
            redirect('bahanmakanan');
        }

        $this->load->view('templates/header');
        $this->load->view('bahan_makanan/edit', $data);
        $this->load->view('templates/footer');
    }

    // Hapus data berdasarkan ID
    public function hapus($id)
    {
        $this->BahanMakanan_model->delete($id);
        redirect('bahanmakanan');
    }
}
