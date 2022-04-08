<?php

namespace App\Entity;

use App\Repository\PresenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PresenceRepository::class)
 */
class Presence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heure_arrive;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heure_depart;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeureArrive(): ?\DateTimeInterface
    {
        return $this->heure_arrive;
    }

    public function setHeureArrive(?\DateTimeInterface $heure_arrive): self
    {
        $this->heure_arrive = $heure_arrive;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heure_depart;
    }

    public function setHeureDepart(?\DateTimeInterface $heure_depart): self
    {
        $this->heure_depart = $heure_depart;

        return $this;
    }
}
