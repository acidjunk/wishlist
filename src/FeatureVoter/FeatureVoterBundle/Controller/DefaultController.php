<?php

namespace FeatureVoter\FeatureVoterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FeatureVoterBundle:Default:index.html.twig', array('name' => $name));
    }
}
