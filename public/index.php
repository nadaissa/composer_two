<?php

require '../vendor/autoload.php';

use App\Hello;

$sayHello = new Hello('Hello World!');

echo $sayHello->getSentence();