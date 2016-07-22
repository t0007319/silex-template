<?php

use Silex\Application\TwigTrait;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/** @var Silex\Application $app **/

//turn off if not development
$app['debug'] = true;

$app->get('/dashboard', 'AppBundle\Controller\Dashboard::index');
$app->get('/reports/graphs', 'AppBundle\Controller\Reports::graphs');
$app->get('/test/{name}', 'AppBundle\Controller\Reports::graphs');

/**
 * error reporting
 */
$app->error(function (\Exception $e, Request $request, $code) {
    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message);
});

return $app;
