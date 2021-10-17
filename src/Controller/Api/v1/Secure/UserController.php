<?php


namespace App\Controller\Api\v1\Secure;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UserController
 * @package App\Controller\Api\v1\Secure
 * @Route('api/v1/secure/user')
 * @Security("is_granted(ROLE_AUTHOR)") 
 */
class UserController extends AbstractController{


    
}