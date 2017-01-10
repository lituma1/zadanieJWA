<?php

namespace My\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class MainController extends Controller
{
     /**
     * @Route("/panel", name="Panel")
     * @Security("has_role('ROLE_USER')")
     */
    public function showMainPageAfterLoginAction() {

        $link = [];
        $linkOut['href'] = 'fos_user_security_logout';
        $linkOut['text'] = 'Wyloguj';
        $link[] = $linkOut;
        return $this->render('MyTaskBundle:Main:show_main_page_1.html.twig', array(
                 'links' => $link   
        ));
    }

    /**
     * @Route("/")
     * 
     */
    public function showMainPageAction() {

        if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('Panel');
        }

       
        return $this->render('MyTaskBundle:Main:show_main_page.html.twig', array(
                    
        ));
    }
}
