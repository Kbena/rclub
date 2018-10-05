<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HotelRepository")
 */
class Hotel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_hotel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_hotel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_hotel;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_plce_dispo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_publication;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descript_hotel;

    /**
     * @ORM\
     */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomHotel(): ?string
    {
        return $this->nom_hotel;
    }

    public function setNomHotel(string $nom_hotel): self
    {
        $this->nom_hotel = $nom_hotel;

        return $this;
    }

    public function getVilleHotel(): ?string
    {
        return $this->ville_hotel;
    }

    public function setVilleHotel(string $ville_hotel): self
    {
        $this->ville_hotel = $ville_hotel;

        return $this;
    }

    public function getImgHotel(): ?string
    {
        return $this->img_hotel;
    }

    public function setImgHotel(string $img_hotel): self
    {
        $this->img_hotel = $img_hotel;

        return $this;
    }

    public function getNbrePlceDispo(): ?int
    {
        return $this->nbre_plce_dispo;
    }

    public function setNbrePlceDispo(int $nbre_plce_dispo): self
    {
        $this->nbre_plce_dispo = $nbre_plce_dispo;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->date_publication;
    }

    public function setDatePublication(\DateTimeInterface $date_publication): self
    {
        $this->date_publication = $date_publication;

        return $this;
    }

    public function getDescriptHotel(): ?string
    {
        return $this->descript_hotel;
    }

    public function setDescriptHotel(string $descript_hotel): self
    {
        $this->descript_hotel = $descript_hotel;

        return $this;
    }
}
