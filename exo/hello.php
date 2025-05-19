<?php

// variable commence tjr par $
$color = "red";
echo "My car is $color\n";

// la convention de nommage n'est pas normé. camelCase ou snake_case
$isShit = true;

// Les types de données
$myNum = 5;
var_dump($myNum);

$myBool = true;
var_dump($myBool);

$myString = "Hello World!\n";
var_dump($myString);

$myFloat = 10.365;
var_dump($myFloat);

$cars = ["Volvo","BMW","Toyota"];
var_dump($cars);

echo $cars[0] . "\n";

$ideJetBrains = array(
    "php" => "PhpStorm",
    "java" => "Intellij",
    "python" => "PyCharm",
);
echo $ideJetBrains["php"] . "\n";

$futurNull = "Hello world!";
$futurNull = null;
var_dump($futurNull);

// manipulation String

$len = strlen("Coucou");
echo "$len\n";

echo str_replace("World", "MotherFuckers", $myString);

$pref = "first";
$suf = "last";
$all = $pref ." ". $suf;
echo "$all\n";

// cast
$from = "12";
$toInt = (int)$from;
var_dump($toInt);

$from = 12;
$toString = (string)$from;
var_dump($toString);

// Operator. Les mêmes que JS
$codeStatus = 404;
$isOk = $codeStatus == 200 || $codeStatus == 201;

// if else
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!\n";
} elseif ($t < "20") {
    echo "Have a good day!\n";
} else {
    echo "Have a good night!\n";
}

$age = 18;

$b = $age < 18 ? "Mineur" : "Majeur";

// Loop
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
echo "\n";

for ($i = 0; $i <= 10; $i++) {
    echo "The number is: $i\n";
}

for ($i = 0; $i < count($cars); $i++) {
    echo "$cars[$i]\n";
}

foreach ($cars as $car) {
    echo "$car\n";
}

// Manipulation de Tableau

array_push($cars, "Ford");
var_dump($cars);

// Function
function sum($x, $y) {
    return $x + $y;
}
$total = sum(5,6);

function changeFirstElement($tab) {
    $tab[0] = 12;
}

$array_int = [0,13];
changeFirstElement($array_int);
var_dump($array_int);