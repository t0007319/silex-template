<?php

// web/index.php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__ . '/../app/Bootstrap.php';
require_once __DIR__ . '/../src/Routes.php';

$app->run();
