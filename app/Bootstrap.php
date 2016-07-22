<?php

//register twig to Silex
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../app/resources/views',
));

//assets
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1',
    'assets.version_format' => '%s?version=%s',
    'assets.named_packages' => array(
        'css' => array('version' => 'css1', 'base_path' => '../assets/css'),
        'fonts' => array('version' => 'fonts1', 'base_path' => '../assets/fonts'),
        'bower' => array('version' => 'bower1', 'base_path' => '../assets/bower_components'),
        'js' => array('version' => 'js1', 'base_path' => '../assets/js'),
    ),
));

return $app;
