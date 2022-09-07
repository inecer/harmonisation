<?php
require __DIR__ . '/../vendor/autoload.php';

$code = new \app\code\Basic(name: "PHP",structure: "Dynamique",compilation: "Standalone");
//$code->name = "php";
//$code->setStructure("dynamique")->setCompilation("standalone");

echo "CODE :" . "<br>" .
     "NAME : " . $code->name . "<br>" .
     "STRUCTURE : " . $code->getStructure() . "<br>" .
     "COMPILATION : " . $code->getCompilation() . "<br>";

$subCode = new \app\code\SubBasic(name: "JAVA",structure: "Dynamique",compilation: "Distribuer");
echo "<br>" . "CODE :" . "<br>" .
    "NAME : " . $subCode->name . "<br>" .
    "STRUCTURE : " . $subCode->getStructure() . "<br>" .
    "COMPILATION : " . $subCode->getCompilation() . "<br>";