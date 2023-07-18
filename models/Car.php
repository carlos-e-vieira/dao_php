<?php

declare(strict_types=1);

class Car
{
    private $id;
    private $brand;
    private $km;
    private $color;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    public function getKm(): float
    {
        return $this->km;
    }

    public function setKm($km): void
    {
        $this->km = $km;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }
}

interface CarDAOInterface
{
    public function create(Car $car);
    public function findAll();
}
