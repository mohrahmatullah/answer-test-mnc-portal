<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation', 'session']);
	}

	public function lihatdata()
	{
		$data['database'] = $this->post_model->get_all_data();

		$data['title'] = "Test tampil Database";

		$this->load->view('templates/header', $data);
		$this->load->view('tampildata', $data);
		$this->load->view('templates/footer');
	}

	public function formtambah()
	{
		$data['title'] = "Tambah Data | Test tampil Database";

		$this->load->view('templates/header', $data);
		$this->load->view('formtambah');
		$this->load->view('templates/footer');
	}

	public function tambahpost()
	{
		$this->form_validation->set_message('is_unique', '{field} sudah terpakai');

		$this->form_validation->set_rules('title', 'title', ['required', 'is_unique[posts.title]']);

		$this->validasi();

		if($this->form_validation->run() === FALSE)
		{
			$this->formtambah();
		}
		else
		{
			$this->post_model->tambah_post();
			$this->session->set_flashdata('input_sukses','Data posts berhasil di input');
			redirect('/home/lihatdata');
		}
	}

	public function hapusdata($id)
	{
		$this->post_model->hapus_post($id);
		$this->session->set_flashdata('hapus_sukses','Data post berhasil di hapus');
		redirect('/home/lihatdata');
	}

	public function formedit($id)
	{
		$data['title'] = 'Edit Data | Test tampil Database';

		$data['db'] = $this->post_model->edit_post($id);

		$this->load->view('templates/header', $data);
		$this->load->view('formedit', $data);
		$this->load->view('templates/footer');
	}

	public function updatepost($id)
	{
		$this->validasi();

		if($this->form_validation->run() === FALSE)
		{
			$this->formedit($id);
		}
		else
		{
			$this->post_model->update_post();
			$this->session->set_flashdata('update_sukses', 'Data post berhasil diperbaharui');
			redirect('/home/lihatdata');
		}
	}

	public function validasi()
	{
		$this->form_validation->set_message('required', '{field} tidak boleh kosong');

		$config = [[
					'field' => 'title',
					'label' => 'title',
					'rules' => 'required'
				],
				[
					'field' => 'description',
					'label' => 'description',
					'rules' => 'required'
				],
				[
					'field' => 'content',
					'label' => 'content',
					'rules' => 'required'
				],
				[
					'field' => 'publish_date',
					'label' => 'publish_date',
					'rules' => 'required'
				]];

		$this->form_validation->set_rules($config);
	}
}
?>