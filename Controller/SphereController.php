<?php

namespace Acme\SphereOfFateBundle\Controller;

use Acme\SphereOfFateBundle\Form\Type\EventType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\SphereOfFateBundle\Entity\Event;

class SphereController extends Controller
{
    /**
     * @Method(methods={"GET", "POST"})
     * @param Request $request
     * @internal param $product
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/main")
     */
    public function newAction(Request $request)
    {
        $event = new Event();

        $form = $this->createForm(new EventType(), $event);
        $form->handleRequest($request);

        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirect($this->generateUrl('sphere'));
        }

        return $this->render('AcmeSphereOfFateBundle:Default:index.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/sphere")
     */
    public function indexAction()
    {
        return $this->render('AcmeSphereOfFateBundle:Default:new.html.twig',array(
            'result'=>$this->get('confirm')->Random()
        ));
    }

} 