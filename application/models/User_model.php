<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		//carrega o banco
        $this->load->database();
    }

    public function get_users() {
		// busca os usuários
        $query = $this->db->get('users');
        return $query->result();
    }

    public function get_user($id) {
		// busca o usuário de acordo com o id
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }

    public function create_user($data) {
		// insere um novo usuário
        return $this->db->insert('users', $data);
    }

    public function update_user($id, $data) {
		// atualiza um usuário
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function delete_user($id) {
		// deleta um usuário
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}
