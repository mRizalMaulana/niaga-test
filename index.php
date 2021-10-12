<?php

require 'vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('views');
$twig = new Twig\Environment($loader);

echo $twig->render('index.html', [
    'name'  => "Rizal M",
    'age'   => "28"
]);