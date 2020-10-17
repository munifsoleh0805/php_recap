<?php

function sayName($name="Gaess")
{
    echo "Hello ".$name.PHP_EOL;
}
sayName();
sayName("SarNep");

call_user_func('sayName', 'Jhon Doe');

call_user_func_array('sayName',['Jane Doe']);

// Anonymous function (Closure)
$solider=function($name){echo $name.PHP_EOL;};
$solider=('Captian Price');

// $result=fn($x)=>$x*2;
// echo $result(19);

function getLastName($name)
{
    $real_name=explode(" ",$name);

    $getLastIndex=count($real_name)-1;

    if($real_name[$getLastIndex]!="Doe")
    {
        return "Youre not Doe family";
    }

    return $real_name[$getLastIndex].PHP_EOL;
}
echo getLastName("Jane Doe Zuckernberg");