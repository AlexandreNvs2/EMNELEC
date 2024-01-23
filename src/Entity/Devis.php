<?php

namespace App\Entity;

use App\Repository\DevisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DevisRepository::class)]
class Devis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    #[Assert\Lenght(min:2, max : 30)]
    private ?string $nom = null;

    #[ORM\Column(length: 30)]
    #[Assert\Lenght(min:2, max : 30)]
    private ?string $prenom = null;

    #[ORM\Column(length: 180)]
    #[Assert\Email()]
    #[Assert\Lenght(min:2, max : 180)]
    private ?string $mail = null;

    #[ORM\Column(length: 10000)]
    #[Assert\Lenght(min:2, max : 180)]
    #[Assert\NotBlank()]
    private ?string $demandeClient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDemandeClient(): ?string
    {
        return $this->demandeClient;
    }

    public function setDemandeClient(string $demandeClient): static
    {
        $this->demandeClient = $demandeClient;

        return $this;
    }
}
