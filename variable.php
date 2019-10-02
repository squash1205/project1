<?php
/*$hi = 'Hi';
$hello = 'Hello';

function sayHi($hi)
{
    
    echo $hi;
}

function sayHello($hello)
{
    echo $hello;
}

sayHi($hi);
sayHello($hello);*/
const HELLO = 'Hello';
const SHIYANLOU = 'shiyanlou';

class Test
{
    public function sayHi()
    {
        define(HELLO, 'Hi');
        echo HELLO;
    }
}

$t = new Test();
$t->sayHi();