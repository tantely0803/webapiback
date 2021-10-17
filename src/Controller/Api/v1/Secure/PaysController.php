<?php


namespace App\Controller\Api\v1\Secure;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PaysController
 * @package App\Controller\Api\v1\Secure
 * @Security("is_granted(ROLE_AUTHOR)")
 * @Route('api/v1/secure/pays')
 */
class PaysController extends AbstractController{


    
}