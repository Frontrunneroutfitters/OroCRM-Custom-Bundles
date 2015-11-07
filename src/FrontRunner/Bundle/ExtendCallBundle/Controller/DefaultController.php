<?php

namespace FrontRunner\Bundle\ExtendCallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrontRunnerExtendCallBundle:Default:index.html.twig', array('name' => $name));
    }
}
