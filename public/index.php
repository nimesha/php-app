<?php

require_once __DIR__ . '/app/Defines.php';
require_once __DIR__  . '/vendor/autoload.php';

use App\Core\Application;

$app = new Application();
$app->run();

