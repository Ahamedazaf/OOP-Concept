<?php

class TestingFunction
{
    // No Parameter
    public function NoparaNoReturn()
    {
        echo ("WithOut Parameter and No Return Value<br>");
    }

    public function ParameterReturn()
    {
        return ("Parameter return value<br>");
    }
}

$obj = new TestingFunction();
$obj->NoparaNoReturn();
echo $obj->ParameterReturn();



?>
