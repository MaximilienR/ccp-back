<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Number_commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberCommande(): ?int
    {
        return $this->Number_commande;
    }

    public function setNumberCommande(int $Number_commande): self
    {
        $this->Number_commande = $Number_commande;

        return $this;
    }
}
