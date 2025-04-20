<?php


class GrandFather
{
    public function land()
    {
        echo ("This is Grand Father land");
    }
}

class Appa extends GrandFather
{
    public  $a = 5;
    public function show()
    {
        // $b = new Testing();
        // echo $b->a;

        echo ($this->a);
        echo ($this->show1());
        echo ($this->show2());
        echo ("This is OOP Concept!");
    }

    public function show1()
    {

        echo ("This is OOP Concept 01");
    }
    public function show2()
    {
        echo ("This is OOP Concept 02");
    }

    public function bike()
    {
        echo ("This is Appa Bike");
        echo ("This is Grand Father Land" . $this->land());
    }
}

class Son extends Appa
{
    public function cycle()
    {
        echo "My cycle";
    }
}

$son = new Son;
$son->land();
$son->cycle();
$son->bike();
