<?php
declare(strict_types=1);

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

class Beverage {

    protected const BARNAME = 'Het Vervolg';
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

    public function getname(){
        return $this->name;
    }


}

$cola = new Beverage(3.0,"black");
$guinness = new Beer("guinness", 3.5, 4.0, "dark");

echo "The Bar {$cola->getBarname()} is open <br>";
echo "The Bar {$guinness->getBarname()} serves {$guinness->getname()}<br>";
