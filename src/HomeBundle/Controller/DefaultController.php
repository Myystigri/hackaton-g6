<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Entity\User;
use TrajetBundle\Entity\Trajets;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeBundle:home:home.html.twig');
    }


    public function vue10Action()
    {
        return $this->render('HomeBundle:vue:vue10.html.twig');
    }
   	public function vue20Action()
    {
        return $this->render('HomeBundle:vue:vue20.html.twig');
    }
    public function vue30Action()
    {
        return $this->render('HomeBundle:vue:vue30.html.twig');
    }
    public function vue40Action()
    {
        return $this->render('HomeBundle:vue:vue40.html.twig');
    }
    public function vue50Action()
    {
        return $this->render('HomeBundle:vue:vue50.html.twig');
    }
    public function vue60Action()
    {
        return $this->render('HomeBundle:vue:vue60.html.twig');
    }
    
    
    public function showProfilAction (Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this -> getUser();
        $userid = $user -> getId();
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:User');
        $datauser = $repository->findOneById($userid);
        $profil = $em->getRepository('TrajetBundle:Trajets')->findOneById_user($user->getId());
        return $this->render('HomeBundle:profile:profile.html.twig', array(
            'user'=>$user,
            'datauser'=>$datauser,
            'profil'=>$profil,
        ));
    }
}