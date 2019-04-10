<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 09/04/19
 * Time: 11:34
 */

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader, ['cache' => false]);
$products = [
    'salade',
    'tomate',
    'oignon',
    'ketchup',
    'mayo',
];

echo $twig->render('index.html.twig',array ('products' => $products) );


