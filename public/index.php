<?php

require '../vendor/autoload.php';

//code de l'exercice composer 2
// use App\Hello;

// $sayHello = new Hello('Hello World!');

// echo $sayHello->getSentence();

//code de la documentation gipetto pour l'exercice composer 3
use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;

// // or just echo the object for direct output
// echo $bessie;

?>