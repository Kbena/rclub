<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class EqController extends Controller
{ 
      /**
     *  @Route("/equipe", name="equipe")
     */
    public function equipe(){
        return $this->render('equipe/equipe.html.twig', [
            'controller_name' => 'EqController',
        ]);
    }
}