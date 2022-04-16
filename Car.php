<?php

class Car
{
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy )
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
   public function getNbWheels(): int
   {
       return $this->nbWheels;
   }
   public function getCurrentSpeed():int
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

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }


    public function start(): string
    {
        if($this->hasParkBrake){
            throw new Exception('Le frein à main est mis !');
        }
        return "Vrooom ! ";
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
            $sentence .= "Brake !!!" . PHP_EOL;
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function setParkBrake(bool $isSet): void
    {
        $this->hasParkBrake = $isSet;
    }




}