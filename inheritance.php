<?php

// Father 
class Father
{
    public function bihavior()
    {
        echo ("I have uniq Behavior<br>");
    }
}

// Childrens
class Ahamed extends Father
{
    public function Fatherbihavior()
    {
        echo ("I have uniq Behavior and also Ahamed<br>");
    }
}


$Ahamed = new Ahamed();
$Ahamed->Fatherbihavior(); 




class Mohamed
{
    public function bihavior()
    {
        echo ("I have uniq Behavior and also Mohammed<br>");
    }
}

class John 
{
    public function bihavior()
    {
        echo ("I have uniq Behavior and also John<br>");
    }
}
$John = new John();
$John->bihavior(); 
