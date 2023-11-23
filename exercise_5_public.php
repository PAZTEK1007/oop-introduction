<?php

declare(strict_types=1);


class Beverage 
{
    private $colors;
    private $price;
    private $temperature;
    
    public function __construct(string $colors, float $price, string $temperature = "cold")
    {
        $this->colors = $colors;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->colors . '.' . PHP_EOL . 'The price is: ' . $this->price . ' euro.';
    }
    public function getTemperature(): string {
        return $this->temperature;
    }
}



$cola = new Beverage('black', 2);
$reflectionPrice = new \ReflectionProperty(Beverage::class, 'price');
$reflectionPrice->setAccessible(true);
$reflectionPrice->setValue($cola, 3.5);
echo $cola->getTemperature();
echo $cola->getInfo();

?>