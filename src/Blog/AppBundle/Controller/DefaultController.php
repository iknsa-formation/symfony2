<?php

namespace Blog\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogAppBundle:Default:index.html.twig', array());
    }

    public function navAction()
    {
        return $this->render('BlogAppBundle::nav.html.twig');
    }
}
