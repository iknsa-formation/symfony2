<?php

namespace Blog\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogPostBundle:Default:index.html.twig');
    }
    
    public function showAction()
    {
        return $this->render('BlogPostBundle:Default:show.html.twig');
    }
}
