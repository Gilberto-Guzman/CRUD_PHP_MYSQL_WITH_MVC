<?php
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/app/controllers/UserController.php';

$controller = new UserController();
$route = $_GET['route'] ?? 'index';

switch ($route) {
    case 'show':
        $id = $_GET['id'] ?? 0;
        $controller->show($id);
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $id = $_GET['id'] ?? 0;
        $controller->edit($id);
        break;
    case 'delete':
        $id = $_GET['id'] ?? 0;
        $controller->delete($id);
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
