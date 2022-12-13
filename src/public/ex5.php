<?php

declare(strict_types=1);

/* EXERCISE 5
Copy the class of exercise 1.
TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage {

    
    private float $price;
    private string $temperature;
    private string $color;

    public function __construct(float $price,string $color){
        $this->price = $price;
        $this->temperature = "cold";
        $this->color = $color;

    }

    private function getInfo():void{
        echo "The beverage is {$this->temperature} and {$this->color}";

    }

}


 $reflectionClass = new ReflectionClass(Beverage::class);
 $reflectionPropertyTemperature = $reflectionClass->getProperty('temperature');
 $reflectionPropertyTemperature->setAccessible(true);
 $reflectionPropertyPrice = $reflectionClass->getProperty('price');
$reflectionPropertyPrice->setAccessible(true);
 $reflectionMethod = $reflectionClass->getMethod('getInfo');
 $reflectionMethod->setAccessible(true);


$cola = new Beverage(2, "black");
$reflectionMethod->invoke($cola);
echo "<br>{$reflectionPropertyTemperature->getValue($cola)}";
$reflectionPropertyPrice->setValue($cola, 3.5);
echo "<br>{$reflectionPropertyPrice->getValue($cola)}";

