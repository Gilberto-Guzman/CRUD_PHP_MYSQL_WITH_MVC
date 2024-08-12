<?php
require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../models/User.php';

class UserController extends Controller {
    private $model;

    public function __construct() {
        parent::__construct();
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->getAll();
        $this->view->render('user/index', ['users' => $users]);
    }

    public function show($id) {
        $user = $this->model->getById($id);
        $this->view->render('user/show', ['user' => $user]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->create($_POST['name'], $_POST['email']);
            header('Location: /index.php');
        } else {
            $this->view->render('user/create');
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST['name'], $_POST['email']);
            header('Location: /index.php');
        } else {
            $user = $this->model->getById($id);
            $this->view->render('user/edit', ['user' => $user]);
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /index.php');
    }
}
