<?php

declare(strict_types=1);
class Beverage 
{
    const BARNAME = 'Het Vervolg';
    private static $address = 'Melkmarkt 9, 2000 Antwerpen'; 

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

    public function getBarName(): string
    {
        return self::BARNAME;
    }

    public static function getAddress(): string
    {
        return self::$address;
    }
}

class Beer extends Beverage {

    const BARNAME = 'Het Vervolg';

    private $name;
    private $alcoholPercentage;

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

    public function BarName(): string
    {
        return self::BARNAME;
    }
}

echo 'From : ' . Beverage::getAddress() . PHP_EOL;
echo '<br>';
echo 'Address: ' . Beer::getAddress() . PHP_EOL;

?>