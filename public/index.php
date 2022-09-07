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
    "COMPILATION : " . $subCode->getCompilation() . "<br>" . "<br>****************************<br>";

echo "<h2>Tableau POO</h2> <br>";
$stockCode = [
    new \app\code\InterBasic(name: "PHP",structure: "Dynamique",compilation: "Distribuer"),
    new \app\code\InterBasic(name: "JS",structure: "Statique",compilation: "Standalone"),
    new \app\code\SubBasic(name: "Python",structure: "dynamoStatique",compilation: "nulle"),
    new \app\code\InterBasic(name: "C++",structure: "42",compilation: "Linux"),
    new \app\code\SubBasic(name: "Go",structure: "Land",compilation: "Lambda"),
    (new \app\code\SubBasic(name: "Ruby",structure: "Web",compilation: "Etoile"))->setStructure(structure:"Toto")
];

foreach($stockCode as $asBasic) {
    echo "DESCRIPTION : " . $asBasic->getDescription() . "<br>" .
        "NAME : " . $asBasic->name . "<br>" .
        "STRUCTURE : " . $asBasic->getStructure() . "<br>" .
        "COMPILATION : " . $asBasic->getCompilation() . "<br>-------------------------<br>" ;
}