<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Form\ReservationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservations(Request $request, ObjectManager $manager){
        $resa = new Reservations();
        
        $form = $this->createForm(ReservationType::class, $resa);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $manager->persist($resa);
            $manager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('reservation/index.html.twig',[
           'form' => $form->createView()
        ]);
   }
}