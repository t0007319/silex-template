<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 21/07/16
 * Time: 15:51
 */

namespace AppBundle\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Silex\Controller;
use Silex\Route;

/**
 * Class Dashboard
 * @package AppBundle\Controller
 */

class Dashboard
{
    /**
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function index(Request $request, Application $app)
    {
            return $app['twig']->render('dashboard.html.twig', array(
                'emptyArray' => 'data'
            ));
    }
}
