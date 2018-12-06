<?php

namespace ReplyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        
        
        $form_registration = $this->get('fos_user.registration.form.factory');
        $form_registration = $form_registration->createForm();


        
        return $this->render('ReplyBundle:Default:index.html.twig', array(
                     'form' => $form_registration->createView(),
             ));
      
    }
}
