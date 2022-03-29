<?php
// Bicycle.php


class Bicycle
{

    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private bool $hasLuggageRack;

// fonctions methodes
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }


    public function setHasLuggageRack(bool $hasLuggageRack): void
    {
        $this->hasLuggageRack = $hasLuggageRack;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }


    public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
}
}

