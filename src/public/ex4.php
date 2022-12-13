<?php

declare(strict_types=1);

class Beverage {

    
    protected float $price;
    protected string $temperature;
    protected string $color;

    public function __construct(float $price,string $color){
        $this->price = $price;
        $this->temperature = "cold";
        $this->color = $color;

    }

    // Getters
    public function getprice():float{
        return $this->price;
    }
    public function gettemperature():string{
        return $this->temperature;
    }

    public function getcolor():string {
        return $this->color;
    }

    public function getInfo():void{
        echo "<br> The beverage is {$this->gettemperature()} and {$this->getcolor()}";

    }

    //Setter

    public function setcolor(string $newcolor){
        $this->color = $newcolor;
    }

}

// ! Not needed
// $reflectionClass = new ReflectionClass(Beverage::class);
// $reflectionproperties = $reflectionClass->getProperties(ReflectionProperty::IS_PROTECTED);
// echo "{$reflectionproperties}";
// print_r($reflectionproperties);


class Beer extends Beverage {
    protected string $name;
    protected float $alcoholpercentage;


    public function __construct(string $name,float $alcoholpercentage,float $price,string $color){
        parent::__construct($price, $color);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    



    //Getters
    public function getname():string{
        return $this->name;
    }
    public function getalcoholpercentage():float{
        return $this->alcoholpercentage;
    }

//Methods
    private function beerInfo()
    {
        return "<br> Hi i'm {$this->name} and have an alcohol percentage of {$this->alcoholpercentage} and a {$this->color} color";
    }


}

$reflectionBeer = new ReflectionMethod(Beer::class, "beerInfo");
$reflectionBeer->setAccessible(true);



$duvel = new Beer("Duvel", 8.5, 3.5, "blond");

echo "<br>{$duvel->getAlcoholPercentage()}";
echo "<br>{$duvel->getAlcoholPercentage()}";
echo $duvel->getInfo();
$duvel->setcolor("light");
echo $duvel->getcolor();
echo $reflectionBeer->invoke($duvel); //reflection is a maechanism to access private methods outside of a class

/* EXERCISE 4
Copy the code of exercise 3 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.
USE TYPEHINTING EVERYWHERE!
*/