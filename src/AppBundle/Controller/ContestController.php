<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contest controller.
 *
 * @Route("contest")
 */
class ContestController extends Controller
{
    /**
     * Lists all contest entities.
     *
     * @Route("/", name="contest_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contests = $em->getRepository('AppBundle:Contest')->findAll();

        return $this->render('contest/index.html.twig', array(
            'contests' => $contests,
        ));
    }

    /**
     * Lists all contest entities.
     *
     * @Route("/list", name="contest_index2")
     * @Method("GET")
     */
    public function index2Action()
    {
        $em = $this->getDoctrine()->getManager();

        $contests = $em->getRepository('AppBundle:Contest')->findAll();

        return $this->render('contest/default.html.twig', array(
            'contests' => $contests,
        ));
    }


    /**
     * Creates a new contest entity.
     *
     * @Route("/new", name="contest_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contest = new Contest();
        $form = $this->createForm('AppBundle\Form\ContestType', $contest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contest);
            $em->flush();

            return $this->redirectToRoute('contest_show', array('id' => $contest->getId()));
        }

        return $this->render('contest/new.html.twig', array(
            'contest' => $contest,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contest entity.
     *
     * @Route("/{id}", name="contest_show")
     * @Method("GET")
     */
    public function showAction(Contest $contest)
    {
        $deleteForm = $this->createDeleteForm($contest);

        return $this->render('contest/show.html.twig', array(
            'contest' => $contest,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contest entity.
     *
     * @Route("/{id}/edit", name="contest_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Contest $contest)
    {
        $deleteForm = $this->createDeleteForm($contest);
        $editForm = $this->createForm('AppBundle\Form\ContestType', $contest);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contest_edit', array('id' => $contest->getId()));
        }

        return $this->render('contest/edit.html.twig', array(
            'contest' => $contest,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contest entity.
     *
     * @Route("/{id}", name="contest_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Contest $contest)
    {
        $form = $this->createDeleteForm($contest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contest);
            $em->flush();
        }

        return $this->redirectToRoute('contest_index');
    }

    /**
     * Creates a form to delete a contest entity.
     *
     * @param Contest $contest The contest entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contest $contest)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contest_delete', array('id' => $contest->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
