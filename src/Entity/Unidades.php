<?php

namespace App\Entity;

use App\Repository\UnidadesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UnidadesRepository::class)
 */
class Unidades
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $recolectores;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecolectores(): ?int
    {
        return $this->recolectores;
    }

    public function setRecolectores(?int $recolectores): self
    {
        $this->recolectores = $recolectores;

        return $this;
    }
}
