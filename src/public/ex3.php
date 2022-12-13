<?php

declare(strict_types=1);

class Beverage {

    
    private float $price;
    private string $temperature;
    private string $color;

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

class Beer extends Beverage {
    private string $name;
    private float $alcoholpercentage;


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
        return "<br> Hi i'm {$this->getname()} and have an alcohol percentage of {$this->getAlcoholPercentage()} and a {$this->getcolor()} color";
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

/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/