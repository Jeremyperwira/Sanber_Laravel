<?php 
// Release 0 //
require ("animal.php");
include ("Ape.php")
include ("Frog.php")


$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded; // false


// Release 1 //
$sungokong = new Ape("kera sakti");
$sungokong->yell() // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
?>
