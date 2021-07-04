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

}

class Dog
{

}

class Fish
{

}

?>
<pre>
<?

$zoo = [];

$zoo[0] = new Cat("Cat1");
$zoo[1] = new Cat("Cat2");
$zoo[2] = new Cat("Cat3");

$zoo[3] = new Dog("Dog1");
$zoo[4] = new Dog("Dog2");
$zoo[5] = new Dog("Dog3");
$zoo[6] = new Dog("Dog4");
$zoo[7] = new Dog("Dog5");

$zoo[8] = new Fish("Fish1");


var_dump($zoo);
?>