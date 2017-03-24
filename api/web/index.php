<?php

ini_set('display_errors', -1);

require_once __DIR__.'/../php/vendor/autoload.php';

$app = require __DIR__.'/../php/src/app.php';
require __DIR__.'/../php/config/prod.php';
require __DIR__.'/../php/src/controllers.php';
$app->run();
