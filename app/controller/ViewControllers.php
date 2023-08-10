<?php

/**
 * * ENRUTADOR DEL SITE
 * * LAS VISTAS SE CARGARAN DESDE EL CONTROLADOR
 */

require "app/controller/PageController.php";

$route = PageController::class;

if (isset($_GET['url'])) {
    $path = $_GET['url'];

    switch ($path) {
        case 'home':
            $route::home();
            break;

        case 'comment':
            $route::comment();
            break;

        case 'contact':
            $route::contact();
            break;

        default:
            $route::not_found();
            break;
    }
} else {
    require "views/welcome.php";
}
