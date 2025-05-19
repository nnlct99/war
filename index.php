<?php

include "army.php";
include "soldier.php";

$soldat1 = new Soldier("Jean Marc", "Première Classe");

$armée1 = new Army("Elite","1er régiment d'artillerie");



echo $soldat1;
echo "\n";
echo $armée1;