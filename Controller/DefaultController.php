<?php

namespace JoaoIm\Bundle\ProyectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JoaoImProyectsBundle:Default:index.html.twig', array('name' => $name));
    }
}
