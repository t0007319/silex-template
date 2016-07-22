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
 * Class Reports
 * @package AppBundle\Controller
 */

class Reports
{
    /**
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function graphs(Request $request, Application $app)
    {
            return $app['twig']->render('graphs.html.twig', array(
                'name' => 'Adam',
            ));
    }
    /**
     * @param $purpose
     * @return Response
     */
    public function weeklyReport($purpose)
    {
        return new Response('<b>report</b>');
    }
}
