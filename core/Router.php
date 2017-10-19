<?php
class Router {
  public $routes;
  public function __construct($routes){
    $this->routes = $routes;
  }
  
  public function define($uri){
    if (array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    } else {
      return $this->routes['notfound'];
    }
  }
}