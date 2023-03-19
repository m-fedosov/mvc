<?php

require_once '../vendor/autoload.php';

use App\Controllers\Controller;

$request = $_SERVER['REQUEST_URI'];
$parts = explode('/', $request);

if ($parts[1] === 'home') {
    if (count($parts) === 2) {
        // call the home method of the controller
        $controller = new Controller();
        $controller->home();
    } elseif (count($parts) === 3) {
        // call the greeting method of the controller with the name provided in the URL
        $name = $parts[2];
        $controller = new Controller();
        $controller->greeting($name);
    }
} else {
    // return a 404 response
    http_response_code(404);
    $controller = new Controller();
    $controller->error($request);
}
