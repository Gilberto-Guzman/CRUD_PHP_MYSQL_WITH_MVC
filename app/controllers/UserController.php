<?php
require_once __DIR__ . '/../../app/models/User.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->getAll();
        require 'app/views/user/index.php';
    }

    public function show($id) {
        $user = $this->model->getById($id);
        require 'app/views/user/show.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->create($_POST['name'], $_POST['email']);
            header('Location: /index.php');
        } else {
            require 'app/views/user/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST['name'], $_POST['email']);
            header('Location: /index.php');
        } else {
            $user = $this->model->getById($id);
            require 'app/views/user/edit.php';
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /index.php');
    }
}
