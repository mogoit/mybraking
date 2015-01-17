<?php

namespace MyBraking\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyBrakingBackBundle:Default:index.html.twig');
    }
}
