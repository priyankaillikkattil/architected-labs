<?php

require_once __DIR__.'/vendor/autoload.php';
require_once ('src/Controllers/BasketController.php');
use src\Controllers\BasketController;

$controller = new \Controllers\BasketController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data['products'])) {
        $controller->addProducts($data['products']);
    }
}
$controller->displayBasket();