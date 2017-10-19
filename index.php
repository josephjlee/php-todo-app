<?php
require 'core/boot.php';
require 'routes.php';
$router = new Router($routes);
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($request_uri, '/');
echo '<br>';
require $router->define($uri);


