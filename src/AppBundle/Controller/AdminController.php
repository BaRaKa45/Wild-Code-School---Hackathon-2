<?php
/**
 * Created by PhpStorm.
 * User: wilder22
 * Date: 17/05/18
 * Time: 14:50
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contest controller.
 *
 * @Route("admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="admin_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('admin/index.html.twig');
    }

    /**
     * @Route("/test", name="admin_test")
     * @Method("GET")
     */
    public function testAction()
    {
        return $this->render('team/index.html.twig');
    }
}