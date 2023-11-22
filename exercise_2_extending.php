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

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/