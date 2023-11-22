<?php

declare(strict_types=1);

class Beverage
{
    protected $color;
    protected $price;
    protected $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color.";
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}

class Beer extends Beverage
{
    private $alcoholPercentage;

    public function __construct(string $color, float $price, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    private function beerInfo(): string
    {
        return "Hi, I'm Duvel and have an alcohol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }

    public function getBeerInfo(): string
    {
        return $this->beerInfo();
    }
}

$duvel = new Beer("blond", 3.5, 8.5);
echo $duvel->getInfo();
echo $duvel->getTemperature();
echo '<br>';
echo $duvel->getBeerInfo();
$duvel->setColor("light");
echo $duvel->getColor();

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/