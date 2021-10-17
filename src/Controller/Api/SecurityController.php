<?php


namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController{

    /**
     * @Route("/login" , name="login" , methods={"POST" , "HEAD" } )
     * @return JsonResponse
     */
    public function login(): JsonResponse
    {
       return new JsonResponse("login");
    }


      /**
     * @Route("/register" , name="register" , methods={"POST" , "HEAD"})
     * @return JsonResponse
     */
    public function register(): JsonResponse
    {
       return new JsonResponse("register");
    }


    
}