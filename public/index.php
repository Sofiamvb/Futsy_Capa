<?php

require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../controllers/PaginasController.php';

use MVC\Router;
use Controllers\PaginasController;

$router = new Router();

$router->get('/', [PaginasController::class, 'index']);
$router->get('/registro', [PaginasController::class, 'registro']);
$router->get('/login', [PaginasController::class, 'login']);
$router->comprobarRutas();