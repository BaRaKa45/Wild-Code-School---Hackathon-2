<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(/*Request $request*/)
    {
        $em = $this->getDoctrine()->getManager();

        $contests = $em->getRepository('AppBundle:Contest')->findAll();

        return $this->render('default/index.html.twig', [
            'contests' => $contests,
        ]);
    }
}
