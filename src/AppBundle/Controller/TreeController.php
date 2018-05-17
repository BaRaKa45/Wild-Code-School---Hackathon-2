<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Player;
use AppBundle\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tree controller.
 *
 * @Route("tree")
 */
class TreeController extends Controller
{
    /**
     * Lists all team entities.
     *
     * @Route("/", name="tree_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('tree/index.html.twig');
    }

}
