<?php

namespace MyBraking\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    public function loginAction()
    {
        return $this->render('MyBrakingBackBundle:Default:login.html.twig');
    }
}
