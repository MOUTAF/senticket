<?php
/**
 * Created by PhpStorm.
 * User: PGI-User02
 * Date: 17/01/2019
 * Time: 13:59
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {

        return $this->render('index.html.twig', [

        ]);
    }
}