<?php

class Peacock
{
    public function sound()
    {
        echo ("Peacock sound<br>");
    }
}
class Cock extends Peacock
{
    public function sound()
    {
        echo ("Cock sound<br>");
    }
}

$obj = new Cock();
$obj->sound(); // Output: Dog sound
