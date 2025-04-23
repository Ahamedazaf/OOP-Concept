<?php

class car
{

    public $brand;
    public $model;

    public function  toyoto()
    {
        echo $this->brand;
    }
}

$obj = new car();
$obj->brand = "toyoto";
$obj->toyoto(); // toyoto


// Encapsulation

class van
{
    private $brand;
    private $model;

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }
}

$obj = new van();
$obj->setBrand("toyoto");
echo $obj->getBrand(); // toyoto
