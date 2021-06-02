<?php

class Post_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data()
	{
		$this->db->from('posts');
		$this->db->order_by("publish_date", "desc");
		$query = $this->db->get(); 
		return $query->result();
	}

	public function tambah_post()
	{
		$data = [
					'id' => $this->input->post('id'),
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'content' => $this->input->post('content'),
					'publish_date' => $this->input->post('publish_date'),
				];

		$this->db->insert('posts', $data);
	}

	public function edit_post($id)
	{
		$query = $this->db->get_where('posts', ['id' => $id]);
		return $query->row();
	}

	public function update_post()
	{
		$kondisi = ['id' => $this->input->post('id')];
		
		$data = [				
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'content' => $this->input->post('content'),
					'publish_date' => date('Y-m-d H:i:s',strtotime($this->input->post('publish_date'))),
				];

		$this->db->update('posts', $data, $kondisi);
	}

	public function hapus_post($id)
	{
		$this->db->delete('posts', ['id' => $id]);
	}
}

?>