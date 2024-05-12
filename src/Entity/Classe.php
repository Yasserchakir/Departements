<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasseRepository::class)]
class Classe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_classe = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $Etage = null;

    #[ORM\Column(length: 255)]
    private ?string $Etat = null;

    #[ORM\Column(length: 255)]
    private ?string $Equipement = null;

    #[ORM\ManyToOne(inversedBy: 'iddepart')]
    #[ORM\JoinColumn(name: "id_depart_id", referencedColumnName: "id", nullable: false)]
    private ?Departement $idDeaprt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClasse(): ?string
    {
        return $this->Nom_classe;
    }

    public function setNomClasse(string $Nom_classe): static
    {
        $this->Nom_classe = $Nom_classe;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getEtage(): ?string
    {
        return $this->Etage;
    }

    public function setEtage(string $Etage): static
    {
        $this->Etage = $Etage;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): static
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getEquipement(): ?string
    {
        return $this->Equipement;
    }

    public function setEquipement(string $Equipement): static
    {
        $this->Equipement = $Equipement;

        return $this;
    }

    public function getIdDeaprt(): ?Departement
    {
        return $this->idDeaprt;
    }

    public function setIdDeaprt(?Departement $idDeaprt): static
    {
        $this->idDeaprt = $idDeaprt;

        return $this;
    }
}

