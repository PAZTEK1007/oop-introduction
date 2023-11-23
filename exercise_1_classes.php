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

$cola = new beverage('black', 2);
echo $cola->getInfo();
echo $cola->getTemperature();

?>