<?php


namespace App\Controller\Api\v1\Secure;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommentController
 * @package App\Controller\Api\v1\Secure
 * @Security("is_granted(ROLE_AUTHOR)")
 * @Route('api/v1/secure/comment')
 */
class CommentController extends AbstractController{


    
}