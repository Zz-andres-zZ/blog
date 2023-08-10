<?php

/**
 * * ENRUTADOR DEL SITE
 * * LAS VISTAS SE CARGARAN DESDE EL CONTROLADOR
 */

require "app/controller/PageController.php";

<<<<<<< Updated upstream
$route = PageController::class;
=======
$pageController = new PageController();
>>>>>>> Stashed changes

if (isset($_GET['url'])) {
    $path = $_GET['url'];

    switch ($path) {
<<<<<<< Updated upstream
        
        case 'home':
            $route::home();
            break;

        default:
            $route::not_found();
            break;
    }
} else {
    require "views/welcome.php";
=======
        case 'home':
            $pageController->home();
            break;

        case 'comment':
            $pageController->comment();
            break;

        default:
            $pageController->not_found();
            break;
    }
} else {
    $pageController->home();
>>>>>>> Stashed changes
}
