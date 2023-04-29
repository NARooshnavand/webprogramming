<?php 

$uri = $_SERVER['REQUEST_URI'];
$routes = [
    '/' => './controller/HomePageController.php',
    '/about' => './controller/AboutController.php',
];
$controller = array_key_exists($uri,$routes)? $routes[$uri]:null;
// $controller = $controller?  $controller:'./controller/HomePageController.php';
$controller = $controller?? './controller/HomePageController.php';
require($controller);
// if($controller)
// {
    
// }else{
    
// }