<?php

namespace DbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
       return $this->render('DbBundle:Index:index.html.twig');
    }
}