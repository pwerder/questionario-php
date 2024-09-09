<?php

namespace app\classes;

use Exception;

class Routes
{
    public static function load($routes, $uri)
    {
        if (!array_key_exists($uri, $routes)) {
            throw new Exception('Not found');
        }
        return "../app/{$routes[$uri]}.php";
    }
}