<?php
require __DIR__ . '/../vendor/autoload.php';

$code = new \app\code\Basic();
$code->name = "php";
$code->setStructure("dynamique")->setCompilation("standalone");

echo "CODE :" . "<br>" .
     "NAME :" . $code->name . "<br>" .
     "STRUCTURE :" . $code->getStructure() . "<br>" .
     "COMPILATION :" . $code->getCompilation() . "<br>";
