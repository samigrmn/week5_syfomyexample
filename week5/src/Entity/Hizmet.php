<?php

namespace App\Entity;

use App\Repository\HizmetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HizmetRepository::class)
 */
class Hizmet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $baslik;

    /**
     * @ORM\Column(type="integer")
     */
    private $fiyat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBaslik(): ?string
    {
        return $this->baslik;
    }

    public function setBaslik(string $baslik): self
    {
        $this->baslik = $baslik;

        return $this;
    }

    public function getFiyat(): ?int
    {
        return $this->fiyat;
    }

    public function setFiyat(int $fiyat): self
    {
        $this->fiyat = $fiyat;

        return $this;
    }
}
