<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
		// carrega a model User
        $this->load->model('User_model');
        header('Content-Type: application/json');
    }

    public function index() {
		// busca todos os usuários
        $users = $this->User_model->get_users();
        echo json_encode($users);
    }

    public function show($id) {
		// busca o usuário de acordo com o id
        $user = $this->User_model->get_user($id);
        echo json_encode($user);
    }

    public function create() {
		// insere um novo usuário
        $data = json_decode(file_get_contents('php://input'), true);
        if ($this->User_model->create_user($data)) {
            echo json_encode(['message' => 'Usuário criado com sucesso.']);
        } else {
            echo json_encode(['message' => 'Falha ao criar usuário.']);
        }
    }

    public function update($id) {
		// atualiza um usuário
        $data = json_decode(file_get_contents('php://input'), true);
        if ($this->User_model->update_user($id, $data)) {
            echo json_encode(['message' => 'Usuário atualizado com sucesso.']);
        } else {
            echo json_encode(['message' => 'Falha ao atualizar usuário.']);
        }
    }

    public function delete($id) {
		// deleta um usuário
        if ($this->User_model->delete_user($id)) {
            echo json_encode(['message' => 'Usuário deletado com sucesso.']);
        } else {
            echo json_encode(['message' => 'Falha ao deletar usuário.']);
        }
    }
}
