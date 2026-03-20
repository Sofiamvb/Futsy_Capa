<?php

namespace Controllers;

use MVC\Router;

class PaginasController
{
    public static function index(Router $router)
    {
        $router->render('paginas/index', []);
    }

    public static function registro(Router $router)
    {
        $router->render('paginas/registro', []);
    }

    public static function login(Router $router)
    {
        $router->render('paginas/login', []);
    }
}
