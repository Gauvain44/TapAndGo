<?php

namespace CitiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CitiesBundle\Entity\City;

class CityController extends Controller
{
    /**
     * @Route("cities/create")
     */
    public function createAction()
    {
    	/*
    	$city = new City();
    	$city->setName("Nantes");
    	$city->setLocation("Nantes, France");
    	$city->setStatus(0);

    	$em = $this->getDoctrine()->getManager();
    	$em->persist($city);
    	$em->flush();
    	*/
        return $this->render('@Cities/City/create.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/city/{id}")
     */
    public function showAction($id){
    	$city = $this->getDoctrine()->getRepository('CitiesBundle:City')->find($id);

    	if(!$city)
    	{
    		throw $this->createNotFoundException();
    	}
    	return $this->render('@Cities/City/show.html.twig', array(
            // ...
        ));
    }

}
