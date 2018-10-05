<?php

namespace App\DataFixtures;

use App\Entity\Hotel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class HotelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1; $i<=8; $i++){
            $hotel = new Hotel();
            $hotel->setNomHotel("Nom de l'hotel n°$i")
                  ->setDatePublication(new \DateTime())
                  ->setImgHotel("http://placehold.it/650x350")
                  ->setVilleHotel("Lieu de l'hotel n°$i")
                  ->setDescriptHotel("<p>Description hotel n°$i</p>")
                  ->setNbrePlceDispo(4, "<p>Place dispo dans l'hotel n°$i");

            $manager->persist($hotel);
        }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
