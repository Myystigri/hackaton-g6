<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Entity\User;
use TrajetBundle\Entity\Trajets;

class RandoController extends Controller
{
    public function rando10k1Action()
    {
        return $this->render('HomeBundle:rando:rando10k1.html.twig');
    }

    public function modifybtnAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet10k1(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;


    }

    public function rando10k2Action()
    {
        return $this->render('HomeBundle:rando:rando10k2.html.twig');
    }

    public function modifybtn10k2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet10k2(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;


    }
    public function rando10k3Action()
    {
        return $this->render('HomeBundle:rando:rando10k3.html.twig');
    }
    public function modifybtn10k3Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet10k3(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando10k4Action()
    {
        return $this->render('HomeBundle:rando:rando10k4.html.twig');
    }
    public function modifybtn10k4Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet10k4(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando20k1Action()
    {
        return $this->render('HomeBundle:rando:rando20k1.html.twig');
    }
    public function modifybtn20k1Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet20k1(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando20k2Action()
    {
        return $this->render('HomeBundle:rando:rando20k2.html.twig');
    }
    public function modifybtn20k2Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet20k2(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando20k3Action()
    {
        return $this->render('HomeBundle:rando:rando20k3.html.twig');
    }
    public function modifybtn20k3Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet20k3(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando20k4Action()
    {
        return $this->render('HomeBundle:rando:rando20k4.html.twig');
    }
    public function modifybtn20k4Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet20k4(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }

    public function rando30k1Action()
    {
        return $this->render('HomeBundle:rando:rando30k1.html.twig');
    }

    public function modifybtn30k1Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet30k1(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;

    }

    public function rando30k2Action()
    {
        return $this->render('HomeBundle:rando:rando30k2.html.twig');
    }

    public function modifybtn30k2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet30k2(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;

    }

    public function rando30k3Action()
    {
        return $this->render('HomeBundle:rando:rando30k3.html.twig');
    }

    public function modifybtn30k3Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet30k3(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;

    }

    public function rando30k4Action()
    {
        return $this->render('HomeBundle:rando:rando30k4.html.twig');
    }

    public function modifybtn30k4Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet30k4(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;

    }

    public function rando40k1Action()
    {
        return $this->render('HomeBundle:rando:rando40k1.html.twig');
    }

    public function modifybtn40k1Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet40k1(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;


    }

    public function rando40k2Action()
    {
        return $this->render('HomeBundle:rando:rando40k2.html.twig');
    }

    public function modifybtn40k2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet40k2(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;
    }


    public function rando40k3Action()
    {
        return $this->render('HomeBundle:rando:rando40k3.html.twig');
    }

    public function modifybtn40k3Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
        //$isok = new Trajets();
        $isok->setTrajet40k3(true);
        $userid = $user->getId();
        $isok->setIdUser($userid);
        // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
        // $trajets = $repository->findOneById_user($userid);

        $em->persist($isok);
        $em->flush();

        $url = $this->generateUrl('home_homepage');
        $response = new RedirectResponse($url);
        return $response;


        // $url = $this -> generateUrl('user_messagerie');
        // $response = new RedirectResponse($url);
        // return $response;
    }



    public function rando40k4Action()
{
    return $this->render('HomeBundle:rando:rando40k4.html.twig');
}

    public function modifybtn40k4Action(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $user = $this->container->get('security.context')->getToken()->getUser();

    $isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
    //$isok = new Trajets();
    $isok->setTrajet40k4(true);
    $userid = $user->getId();
    $isok->setIdUser($userid);
    // $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
    // $trajets = $repository->findOneById_user($userid);

    $em->persist($isok);
    $em->flush();

    $url = $this->generateUrl('home_homepage');
    $response = new RedirectResponse($url);
    return $response;


    // $url = $this -> generateUrl('user_messagerie');
    // $response = new RedirectResponse($url);
    // return $response;

}
    public function rando50k1Action()
    {
        return $this->render('HomeBundle:rando:rando50k1.html.twig');
    }
    public function modifybtn50k1Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet50k1(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;


    }
    public function rando50k2Action()
    {
        return $this->render('HomeBundle:rando:rando50k2.html.twig');
    }
    public function modifybtn50k2Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet50k2(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando50k3Action()
    {
        return $this->render('HomeBundle:rando:rando50k3.html.twig');
    }
    public function modifybtn50k3Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet50k3(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando50k4Action()
    {
        return $this->render('HomeBundle:rando:rando50k4.html.twig');
    }
    public function modifybtn50k4Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet50k4(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando60k1Action()
    {
        return $this->render('HomeBundle:rando:rando60k1.html.twig');
    }
    public function modifybtn60k1Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet60k1(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando60k2Action()
    {
        return $this->render('HomeBundle:rando:rando60k2.html.twig');
    }
    public function modifybtn60k2Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet60k2(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando60k3Action()
    {
        return $this->render('HomeBundle:rando:rando60k3.html.twig');
    }
    public function modifybtn60k3Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet60k3(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando60k4Action()
    {
        return $this->render('HomeBundle:rando:rando60k4.html.twig');
    }
    public function modifybtn60k4Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet60k4(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('home_homepage');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    
}
