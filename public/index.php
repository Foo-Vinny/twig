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


echo $twig->render('index.html.twig',array ('products' => [
    'product1' => 'salade',
    'product2' => 'tomate',
    'product3' => 'oignon',
    'product4' => 'ketchup',
    'product5' => 'mayo',
]) );


