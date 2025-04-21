<?php

abstract class Animal
{
    abstract public function sound();
    abstract public function eat();
    abstract public function sleep();
}
class Dog extends Animal
{
    public function sound()
    {

        echo "Dog bark<br>";
    }

    public function eat()
    {
        echo "Dog eats<br>";
    }

    public function sleep()
    {
        echo "Dog sleeps<br>";
    }
}

$obj = new Dog();
echo $obj->sound(); // Dog sound<br>
echo $obj->eat(); // Dog eats<br>
echo $obj->sleep(); // Dog sleeps<br>

class Cat extends Animal
{
    public function sound()
    {
        echo "Cat meow<br>";
    }

    public function eat()
    {
        echo "Cat eats<br>";
    }

    public function sleep()
    {
        echo "Cat sleeps<br>";
    }
}

$obj2 = new Cat();
echo $obj2->sound(); // Cat sound<br>
