<?php
/**
 * Created by PhpStorm.
 * User: Germen-laptop
 * Date: 21-2-2017
 * Time: 13:13
 */

namespace Germen38\Bundle\TrackBundle\Controller;

use Germen38\Bundle\TrackBundle\Document\Entity\Track;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class TrackController extends Controller
{

    /**
     * @param Request $request
     * @return Response
     */
    public function demandAction(Request $request)
    {
        $request = Request::createFromGlobals();
        $cookies = $request->cookies;

        //attach a variable to a cookie
        $currentCookieValue = $cookies->get('first_session');
        $cookieLocation = $cookies->get('location');


        //Mongodb
        $documentManager = $this->get('doctrine_mongodb')->getManager();
        $track = new Track();
        $track->setUrl($currentCookieValue);
        $track->setCityName($cookieLocation);
        $documentManager->persist($track);
        $documentManager->flush();



        $track2 = $documentManager->getRepository('track-bundle:..\Document\Entity\Track')->findAll();
        dump($track2);


        return $this->render('base.html.twig');
    }

}
