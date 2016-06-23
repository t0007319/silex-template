<?php

use Silex\Application\TwigTrait;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

//$app['assets_path'] = dirname(__FILE__) . '/assets';

/** @var Silex\Application $app **/

//turn off if not development
$app['debug'] = true;

$app->match('/about/{name}', function ($name) use ($app) {
    return $app['twig']->render('about.html.twig', array(
        'name' => $name,
    ));
});

$app->get('/test/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

//$app->error(function (\Exception $e, Request $request, $code) {
//    switch ($code) {
//        case 404:
//            $message = 'The requested page could not be found.';
//            break;
//        default:
//            $message = 'We are sorry, but something went terribly wrong.';
//    }
//
//    return new Response($message);
//});

return $app;
