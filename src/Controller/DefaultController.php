<?php
/**
 * Created by PhpStorm.
 * User: PGI-User02
 * Date: 26/12/2018
 * Time: 20:07
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Form\LoginType;


class DefaultController
{



    #/**
    # * @Route("/", name="index")
     #*/
    public function index()
    {

        return $this->render('welcome.html.twig', array(

        ));

    }
}