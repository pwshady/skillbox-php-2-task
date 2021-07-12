<?php

namespace Factory;

class Toy
{
    public $nameToy = "";
    public $priceToy = 0;

    public function getNameToy()
    {
        return $this->nameToy;
    }

    public function setNameToy($nameToy)
    {
        $this->nameToy = $nameToy;
    }

    public function getPriceToy()
    {
        return $this->priceToy;
    }

    public function setPriceToy($priceToy)
    {
        $this->priceToy = $priceToy;
    }
}

class ToyFactory extends Toy
{
    public function __construct($nameToy, $priceToy)
    {
        $this->setNameToy($nameToy);
        $this->setPriceToy($priceToy);
    }
}

$numberOfToy = rand(5,20);
$totalPrice = 0;

for ($i = 0; $i < rand(5,20); $i++){
    $toy = new ToyFactory("toy", rand(0,100));
    $price = $toy->getPriceToy();
    $totalPrice += $price;
    print ("<p> Toy number: " . $i . " - Price: " . $price . "</p>");
};

print ("<p>Total toys price: " . $totalPrice . "</p>");
