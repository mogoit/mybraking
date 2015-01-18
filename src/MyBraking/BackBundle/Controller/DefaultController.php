<?php

namespace MyBraking\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyBrakingBackBundle:Default:index.html.twig');
    }

    public function userAction()
    {
        return $this->render('MyBrakingBackBundle:Default:user.html.twig');
    }

    public function bracketAction()
    {
        return $this->render('MyBrakingBackBundle:Default:bracket.html.twig');
    }

    public function loginAction()
    {
        // this action is managed by another controller
        return $this->forward('MyBrakingBackBundle:Auth:login');
    }

    public function logoutAction()
    {
    //
    }
}
