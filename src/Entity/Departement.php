<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartementRepository::class)]
class Departement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column]
    private ?int $Numero = null;

    #[ORM\Column]
    private ?int $NombreSalle = null;

    #[ORM\Column]
    private ?int $Rang = null;

    #[ORM\Column(length: 255)]
    private ?string $Placement = null;

    #[ORM\Column(length: 255)]
    private ?string $Chef_departement = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?int $Anne_Creation = null;

    /**
     * @var Collection<int, Classe>
     */
    #[ORM\OneToMany(targetEntity: Classe::class, mappedBy: 'idDeaprt')]
    private Collection $iddepart;

    public function __construct()
    {
        $this->iddepart = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->Numero;
    }

    public function setNumero(int $Numero): static
    {
        $this->Numero = $Numero;

        return $this;
    }

    public function getNombreSalle(): ?int
    {
        return $this->NombreSalle;
    }

    public function setNombreSalle(int $NombreSalle): static
    {
        $this->NombreSalle = $NombreSalle;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->Rang;
    }

    public function setRang(int $Rang): static
    {
        $this->Rang = $Rang;

        return $this;
    }

    public function getPlacement(): ?string
    {
        return $this->Placement;
    }

    public function setPlacement(string $Placement): static
    {
        $this->Placement = $Placement;

        return $this;
    }

    public function getChefDepartement(): ?string
    {
        return $this->Chef_departement;
    }

    public function setChefDepartement(string $Chef_departement): static
    {
        $this->Chef_departement = $Chef_departement;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getAnneCreation(): ?int
    {
        return $this->Anne_Creation;
    }

    public function setAnneCreation(int $Anne_Creation): static
    {
        $this->Anne_Creation = $Anne_Creation;

        return $this;
    }

    /**
     * @return Collection<int, Classe>
     */
    public function getIddepart(): Collection
    {
        return $this->iddepart;
    }

    public function addIddepart(Classe $iddepart): static
    {
        if (!$this->iddepart->contains($iddepart)) {
            $this->iddepart->add($iddepart);
            $iddepart->setIdDeaprt($this);
        }

        return $this;
    }

    public function removeIddepart(Classe $iddepart): static
    {
        if ($this->iddepart->removeElement($iddepart)) {
            // set the owning side to null (unless already changed)
            if ($iddepart->getIdDeaprt() === $this) {
                $iddepart->setIdDeaprt(null);
            }
        }

        return $this;
    }
}
