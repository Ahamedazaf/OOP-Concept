<?php

class laraverTraining
{

    public function __construct()
    {
        echo "This is the constructor<br>";
    }

    public function show()
    {
        echo "This is the Show Function<br>";
    }
}


$object = new laraverTraining();
$object->show();
