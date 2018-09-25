<?php

namespace App\Controller;

use App\Entity\Hotel;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
   
    /**
     * @Route("/", name="home")
     */
    public function home() {

        return $this->render('accueil/home.html.twig');
    }

    /**
     * @Route("/hotel", name="hotel")
     */
    public function index(){
        $repo =$this->getDoctrine()->getRepository(Hotel::class);
        
        $hotels = $repo->findAll();

        return $this->render('accueil/index.html.twig', [
            'hotels' => $hotels
        ]);
    }

    /**
     * @Route("/hotel/{id}", name="hotel_show")
     */
    public function show($id) {
        $repo =$this->getDoctrine()->getRepository(Hotel::class);
        
        $hotel = $repo->find($id);

        return $this->render('accueil/show.html.twig', [
            'hotel' => $hotel
        ]);
    }

}
