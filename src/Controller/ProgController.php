<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProgController extends Controller
{ 
    /**
     * @Route("/programme", name="programme")
     */
    public function programme()
    {
        return $this->render('programme/programme.html.twig', [
            'controller_name' => 'ProgController',
        ]);
    }
}