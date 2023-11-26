<?php

use Shaon\App\Providers\Route;
use Shaon\App\Http\Controllers\PostController;


$route = new Route();

$route->get('posts', [PostController::class, 'index']);

echo $route->dispatch();