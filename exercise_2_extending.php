<?php

declare(strict_types=1);

class beverage 
{

    public $colors;
    public $price;
    public $temperature;
    
    public function __construct(string $colors, float $price, string $temperature = "cold")
    {
        $this->colors = $colors;
        $this->price = $price;
        $this->temperature = $temperature;

    }
    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->colors . '.';
    }
    public function getTemperature(): string
    {
        return $this->temperature;
    }
}

class beer extends beverage {

    public $name;
    public $alcoholPercentage;

    public function __construct(string $colors, float $price, string $temperature = "cold", string $name, float $alcoholPercentage)
    {
        parent::__construct($colors, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage(): string
    {
        return $this->alcoholPercentage;
    }
}

$cola = new beverage('black', 2);
$duvel = new beer('blond', 3.5, 'cold', 'Duvel', 8.5);

echo $cola->getInfo();
echo $cola->getTemperature();
echo '<br>';
echo $duvel->getInfo();
echo $duvel->getTemperature();
echo $duvel->getAlcoholPercentage();

?>