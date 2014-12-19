<?php

namespace Acme\SphereOfFateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\SphereOfFateBundle\Services\Confirm;

class DefaultController extends Controller
{
    /**
     * @Route("/sphere")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('AcmeSphereOfFateBundle:Default:index.html.twig', array(
            'result'=>$this->get('confirm')->Random()
        ));
    }
}
