<?php

require 'vendor/autoload.php';

//routing
$page = 'home';

if(isset($_GET['p'])) {
    $page = $_GET['p'];
}

//charge le template depuis un fichier
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');


$twig = new Twig_Environment($loader, array(
    'cache' => false, //__DIR__.'/tmp'
));

switch ($page) {
    case 'home':
        echo $twig->render('home.twig');
        break;

    case 'services':
        echo $twig->render('services.twig');
        break;

    case 'portfolio':
        echo $twig->render('portfolio.twig');
        break;

    case 'blog':
        echo $twig->render('blog.twig');
        break;

    case 'hireme':
        echo $twig->render('hireme.twig');
        break;
        
    default:
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('404.twig');
        break;
}

