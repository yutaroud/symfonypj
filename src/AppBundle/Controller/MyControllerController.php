<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MyControllerController extends Controller
{
    /**
     * @Route("/my-route")
     * @Template()
     */
    public function myAction()
    {
        return array(
                // ...
            );    }

}
