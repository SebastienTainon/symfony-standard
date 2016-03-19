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
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()->getForm();

        return $this->render('AppBundle:edit.html.twig', [
            'extend_template' => 'AppBundle:parent.html.twig',
            'form'            => $form->createView(),
        ]);
    }
}
