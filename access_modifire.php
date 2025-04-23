<?php
class AccessModifire
{

    public function privateMethoud()
    {
        echo "Hello";
    }
}

class ChildAccessModifire extends AccessModifire
{
    public function accessprivetmethoud()
    {
        $this->privateMethoud();
    }
}

$obj = new ChildAccessModifire();
$obj->accessprivetmethoud();
