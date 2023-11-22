<?php

declare(strict_types=1);


class Beverage 
{
    const BARNAME = 'Het Vervolg';

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
}
class beer extends beverage {

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

$cola = new Beverage('black', 3.5);
$duvel = new beer('blond', 3.5, 'cold', 'Duvel', 8.5);
echo $cola->getInfo();
echo '<br>';
echo PHP_EOL . 'From this bar : ' . Beverage::BARNAME . PHP_EOL; 
echo '<br>';
echo 'From : ' . $cola->getBarName();

echo '<br>';
echo $duvel->getInfo();
echo '<br>';
echo PHP_EOL . 'From this bar : ' . beer::BARNAME . PHP_EOL;
echo '<br>';
echo 'From : ' . $duvel->BarName();



/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/