<?php

require_once('Animal.php');
require_once('Ape.php');
require_once('Frog.php');

$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "<br>"; // "shaun"
echo "legs : " . $sheep->legs . "<br>"; // 4
echo "cold blooded : " . $sheep->cold_blooded . "<br><br>"; // "no"

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>"; // "kodok"
echo "legs : " . $kodok->legs . "<br>"; // 4
echo "cold blooded : " . $kodok->cold_blooded . "<br>"; // "no"
$kodok->jump("Hop Hop" . "<br><br>"); // "hop hop"

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>"; // "sungokong"
echo "legs : " . $sungokong->legs . "<br>"; // 2
echo "cold blooded : " . $sungokong->cold_blooded . "<br>"; // "no"
$sungokong->yell("Auooo" . "<br><br>"); // "Auooo"

// index.php
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>
