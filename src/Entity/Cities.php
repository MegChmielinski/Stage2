<?php

namespace App\Entity;

use App\Repository\CitiesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CitiesRepository::class)]
class Cities
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 3)]
    private $department_code;

    #[ORM\Column(type: 'string', length: 5)]
    private $insee_code;

    #[ORM\Column(type: 'string', length: 5)]
    private $zip_code;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'float')]
    private $gps_lat;

    #[ORM\Column(type: 'float')]
    private $gps_lng;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartmentCode(): ?string
    {
        return $this->department_code;
    }

    public function setDepartmentCode(string $department_code): self
    {
        $this->department_code = $department_code;

        return $this;
    }

    public function getInseeCode(): ?string
    {
        return $this->insee_code;
    }

    public function setInseeCode(string $insee_code): self
    {
        $this->insee_code = $insee_code;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    public function setZipCode(string $zip_code): self
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getGpsLat(): ?float
    {
        return $this->gps_lat;
    }

    public function setGpsLat(float $gps_lat): self
    {
        $this->gps_lat = $gps_lat;

        return $this;
    }

    public function getGpsLng(): ?float
    {
        return $this->gps_lng;
    }

    public function setGpsLng(float $gps_lng): self
    {
        $this->gps_lng = $gps_lng;

        return $this;
    }
}
