<?php
require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';



$sheep = new animal();
$sheep -> setName("sheep");

echo "Jenis Hewan: ".$sheep -> getName()."<br>";
echo "Jumlah kaki : ".$sheep -> legs()."<br>";
echo "Apakah hewan ini berdarah dingin : ".$sheep -> cold_blooded()."<br><br>";



$frog1 = new frog();
$frog1 -> setName("katak berudu");

echo "Jenis hewan: ". $frog1 -> getName()."<br>";
echo "Apakah hewan ini berdarah dingin : ".$frog1 -> cold_blooded()."<br>";
echo "Suara : ".$frog1 -> bunyi()."<br><br>";



$simpanse = new ape();
$simpanse -> setName("simpanse pintar");

echo "Jenis hewan: ".$simpanse -> getName()."<br>";
echo "Jumlah kaki: ".$simpanse -> legs()."<br>";
echo "Apakah hewan ini berdarah dingin: ".$simpanse -> cold_blooded()."<br>";
echo "Suara : ".$simpanse -> suara();

?>