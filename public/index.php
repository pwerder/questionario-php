<?php

use app\classes\Routes;
use app\classes\Uri;

require __DIR__ . '/../bootstrap.php';


$routes = [
    '/' => 'controllers/index'
];


require Routes::load($routes, Uri::load());
