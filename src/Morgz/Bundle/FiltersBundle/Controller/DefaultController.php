<?php

namespace Morgz\Bundle\FiltersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $funds = $this->getDoctrine()
                      ->getRepository('MorgzFiltersBundle:Fund')
                      ->findAll();

        return $this->render(
            'MorgzFiltersBundle:Default:index.html.twig',
            array('funds' => $funds)
        );
    }
}
