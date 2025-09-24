<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

$uri - trim($_SERVER['REQUEST_URI'], '/');

// ✅ Appeler la bonne route
require $router->direct($uri);
