<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
  }

  public function index()
  {
    $data['judul'] = "Gallery Administration";
    $data['gallery'] = $this->Admin_model->get();
    $this->load->view("templates/admin/header", $data);
    $this->load->view("admin/index", $data);
    $this->load->view("templates/admin/footer", $data);
  }

  public function Tambah()
  {
    $data['judul'] = "Form Tambah Gallery";
    $data['gallery'] = $this->Admin_model->get();
    // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama', 'Nama Photo', 'required', [
      'required' => 'Nama Photo Wajib di isi'
    ]);
    $this->form_validation->set_rules('kategori', 'Kategori Photo', 'required', [
      'required' => 'Kategori Photo Wajib di isi'
    ]);
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
      'required' => 'Keterangan Photo Wajib di isi'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("templates/admin/header", $data);
      $this->load->view("admin/tambah", $data);
      $this->load->view("templates/admin/footer", $data);
    } else {
      $data = [
        'gambar' => $this->input->post('gambar'),
        'nama' => $this->input->post('nama'),
        'kategori' => $this->input->post('kategori'),
        'keterangan' => $this->input->post('keterangan'),
      ];
      //upload gambar
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['upload_path'] = './uploads/'; //sus
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
    //   
      $this->Admin_model->insert($data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
      redirect('Admin');

      //       $this->Admin_model->insert($data);
//       $this->session->set_flashdata('message', '<div class="alert alert-success"
// role="alert">Minat Mahasiswa Berhasil Ditambah!</div>');
//       redirect('Admin');
    }
  }

  public function hapus($id)
  {

    $this->Admin_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
Berhasil Dihapus!</div>');
    redirect('Admin');

  }

  public function upload()
  {

    $data = [
      'gambar' => $this->input->post('gambar'),
      'nama' => $this->input->post('nama'),
      'kategori' => $this->input->post('kategori'),
      'keterangan' => $this->input->post('keterangan'),
    ];

    $this->Admin_model->insert($data);
    redirect('Admin');
  }

  public function Edit($id)
  {

    $data['judul'] = "Halaman Edit Gallery";
    $data['gallery'] = $this->Admin_model->getById($id);
    $data['gallery'] = $this->Admin_model->get();
    $this->form_validation->set_rules('nama', 'Nama Photo', 'required', [
      'required' => 'Nama Photo Wajib di isi'
    ]);
    $this->form_validation->set_rules('kategori', 'Kategori Photo', 'required', [
      'required' => 'Kategori Photo Wajib di isi'
    ]);
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
      'required' => 'Keterangan Photo Wajib di isi'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("templates/admin/header", $data);
      $this->load->view("admin/edit", $data);
      $this->load->view("templates/admin/footer", $data);

    } else {
      $data = [
        'gambar' => $this->input->post('gambar'),
        'nama' => $this->input->post('nama'),
        'kategori' => $this->input->post('keterangan'),
        'keterangan' => $this->input->post('deskripsi'),
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['upload_path'] = './uploads/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $old_image = $data['prodi']['gambar'];
          if ($old_image != 'default.jpg') {
            unlink(FCPATH . './uploads/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $id = $this->input->post('id');
      $this->Admin_model->update(['id' => $id], $data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil
Diubah!</div>');
      redirect('Admin');

      // $id = $this->input->post('id');
      // $this->Admin_model->update(['id' => $id], $data);
      // $this->session->set_flashdata('message', '<div class="alert alert-success"
      // role="alert">Data Berhasil DiUbah!</div>');
      // redirect('Admin');
    }

  }
}




/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */