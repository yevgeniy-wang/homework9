<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';
require_once '../config/router.php';

$response = $router->dispatch($request);
echo $response->getContent();

