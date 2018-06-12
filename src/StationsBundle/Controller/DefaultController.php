<?php

namespace StationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /** 
	* @Route("/stations")
	*/
    public function indexAction($page=1,$limit=0)
    {
        return $this->render('@Stations/Default/index.html.twig');
    }

}
