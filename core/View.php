<?php
class View {
    public function render($view, $data = []) {
        extract($data);
        include __DIR__ . '/../app/views/' . $view . '.php';
    }
}
