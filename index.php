<?php

require_once 'vendor/autoload.php';

$router = new \CI\Controllers\Router();

// Routes
$router->get('/', function() {
    stop('Hello World');
});

$router->get('/info', function() {
    $woo = new \CI\Controllers\ApiController();
    stop($woo->info());
});

$router->get('/upload', function() {
    $woo = new \CI\Controllers\ApiController();
    stop($woo->upload());
});
