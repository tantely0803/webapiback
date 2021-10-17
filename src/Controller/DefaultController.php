<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends AbstractController
{
    /**
     * @Route("/" , name="home")
     * @return JsonResponse
     */
    public function home(): JsonResponse
    {
       return new JsonResponse( 'Welcome webapi' );
    }
    /** 
     * @Route("/documentation" , name="apidoc")
     * @return JsonResponse
    */

    public function apiDoc(){
        return new JsonResponse([
            "title" => "Api Documentation Rest full",
            [
                "sous-titre" => "Rest login",
                "sous-titre" => "Rest logout",
                "sous-titre" => "Rest register"
            ]
        ]);
    }
}