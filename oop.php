<?php

class vehicle extends owner {
    //Properties
    public $color = "red";
    public $brand;
    public $model;
    public $maxSpeed;
    public $year;

    //Methods
    public function run(){
        echo "{$this->brand} has started moving";

    }

    public function honk(){

    }

    // function __construct($brand){
    //     $this->brand = $brand;
    // }

    public function stop(){
        echo "{$this->brand} has stopped moving";
    }


    public function setColor ($color) {
        $this->color = $color;
    }

    public function getColor () {
        return $this->color;
    }  
    
    public function setBrand ($brand) {
        $this->brand = $brand;
    }

    public function getBrand () {
        return $this->brand;
    }    
}

$br = "<br>";
$myride = new vehicle("Bobo", "5939", "New Haven");

$myride->setBrand('Opel');
echo $myride->brand;

echo $br;

$myride->run();

echo $br;
$myride->stop();
echo $br;

$mycar = new vehicle("kc", "0809", "GRA");

echo $myride->color;

echo "<br>";

$myride->setColor("green");
$mycar->setColor("orange");

echo $myride->color;
echo "<br>";
echo $mycar->color;

echo $br;
echo $myride->getColor();
echo $br;
echo $mycar->getColor();
echo $br;
echo $br;
echo $br;
echo $br;

class owner {
    //Properties
    public $name;
    public $address;
    public $phonenum;

    function __construct($name, $phonenum, $address) {
        $this->name = $name;
        $this->phonenum = $phonenum;
        $this->address = $address;
    }

    public function buy(){     

    }

    public function sell(){
        echo "{$this->name} has sold {$this->brand} at {$this->address}"; 
        
    }

    function getOwner() {
        return "my name is {$this->name}";
    }
}
$myride->setBrand('Benz');
echo $myride->brand;
echo $br;
//$myride = new owner("Bobo", "234419", "newhaven");
echo $myride->sell();
echo $br;
echo $br;
echo $br;








class Fruit {
    public $name;
    protected $color;
    private $weight;

    public function setColor ($color) {
        $this->color = $color;
    }

    public function getColor () {
        return $this->color;
    }    
}


$mango = new Fruit();
$mango -> name= 'Mango';
echo $mango->name;
//$mango->color = 'Yellow';
echo $br;
//echo $mango->color;
//$mango->weight = '300';
echo $br;
//echo $mango->weight;
$mango->setColor("orange");
echo $mango->getcolor();

?>