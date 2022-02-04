<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function save()
    {
        $data = $this->input->post();
        if (!empty($data)){
            return $this->db->insert('user', $data);
        }
    }

	public function edit($id)
    {
        $data = $this->input->post();
        if (!empty($data)){
            return $this->db->update('user', $data, ['id' => $id]);
        }
    }

    public function getCrud()
    {
        $nama = $this->input->get('nama');
        if (empty($nama)){
            return $this->db->get('user')->result_array();
        } else {
            return $this->db->query('SELECT * FROM user WHERE nama LIKE ?', '%'.$nama.'%')->result_array();
        }
    }

    public function getData($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function delete($id)
    {
        return $this->db->delete('user', ['id' => $id]);
    }
	
}
