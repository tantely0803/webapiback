<?php


namespace App\Controller\Api\v1\Secure;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ArticleController
 * @package App\Controller\Api\v1\Secure
 * @Route('api/v1/secure/')
 * @Security("is_granted(ROLE_AUTHOR)")
 */
class ArticleController extends AbstractController{

    /**
     * @Route("/articles" , name="articles")
     * @return JsonResponse
     */
    public function articles(): JsonResponse
    {
       return new JsonResponse([
           'articles' => []
       ]);
    }


}