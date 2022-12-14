<?php
declare(strict_types=1);


/* EXERCISE 7
Copy your solution from exercise 6
TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/

class Beverage {

    protected const BARNAME = 'Het Vervolg';
    private static string $adress = "Melkmarkt 9, 2000 Antwerpen";
    private float $price;
    private string $temperature;
    private string $color;


    public function __construct(float $price,string $color){
        $this->price = $price;
        $this->temperature = "cold";
        $this->color = $color;

    }

    public function getInfo():void{
        echo "<br> The beverage is {$this->temperature} and {$this->color}";


    }

    public function getBarname():string{
        return self::BARNAME;
    }
    public static function getAdress():string{
        return self::$adress;
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

    public function getAlcoholPercentage():float{
        return $this->alcoholpercentage;
    }

    public function getname():string{
        return $this->name;
    }

    

}

$cola = new Beverage(3.0,"black");
$guinness = new Beer("guinness", 3.5, 4.0, "dark");

echo "The Bar {$cola->getBarname()} is open <br>";
echo "The Bar {$guinness->getBarname()} serves {$guinness->getname()}<br>";
echo Beverage::getAdress();
