<?php

namespace CitiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /** 
	* @Route("/cities")
 	* @Route("/cities/{page}/{limit}",requirements={"page":"\d+","limit":"\d+"})
	*/
    public function indexAction($page=1,$limit=0)
    {
        return $this->render('@Cities/Default/index.html.twig', array("page"=> $page,"limit"=> $limit) );
    }

    /** 
	* @Route("/city/{city}")
	*/
    public function cityAction($city)
    {
    	// A vérifier
        return $this->render('@Stations/Default/index.html.twig', array("city"=> $city) );
    }
}
