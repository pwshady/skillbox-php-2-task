<?php

namespace Aimals;

class Animal
{
    public $name = "";

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Cat extends Animal
{
    public $animalColor = "";
    public $favoriteFood = "";

    public function __construct($name, $animalColor, $favoriteFood)
    {
        parent::__construct($name);
        $this->setAnimalColor($animalColor);
        $this->setFavoriteFood($favoriteFood);
    }

    public function getAnimalColor()
    {
        return $this->animalColor;
    }

    public function setAnimalColor($animalColor)
    {
        $this->animalColor = $animalColor;
    }

    public function getFavoriteFood()
    {
        return $this->favoriteFood;
    }

    public function setFavoriteFood($favoriteFood)
    {
        $this->favoriteFood = $favoriteFood;
    }
}

class Dog extends Animal
{

}

class Fish extends Animal
{

}

class HungryCat extends Cat
{
    public function eat($food)
    {
        $catMessage = "Hungry cat: " . $this->getName() . ", special features: color - " . $this->getAnimalColor() . ", ate " . $food;
        if ($this->getFavoriteFood() === $food){
            $catMessage .= " and purred 'mrrrrr' from his favorite food.";
        }
        print ("<p>" . $catMessage . "</p>");
    }
}

?>
<pre>
<?

$zoo = [];

//$zoo[0] = new Cat("Cat1");
//$zoo[1] = new Cat("Cat2");
//$zoo[2] = new Cat("Cat3");

$zoo[3] = new Dog("Dog1");
$zoo[4] = new Dog("Dog2");
$zoo[5] = new Dog("Dog3");
$zoo[6] = new Dog("Dog4");
$zoo[7] = new Dog("Dog5");

$zoo[8] = new Fish("Fish1");

$hungryCat = new HungryCat("musja", "black", "milk");
$hungryCat->eat("milk");
var_dump($hungryCat);
?>