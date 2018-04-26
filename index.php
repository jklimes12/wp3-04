<?php
include_once "function.php";

$building[] = 50;
$building[] = 102;
$building[] = 80;



for ($i=0; $i < count($building) ; $i++) {

  if (desbuilding($building[$i])) {
    echo "budovu se stářím ". $building[$i]. " nelze zdemolovat</br>";
  }
  else {
    echo "budovu se stářím ". $building[$i]. " lze zdemolovat</br>";
  }
}

?>
