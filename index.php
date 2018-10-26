<?php
require_once 'Car.class.php';
$car = new Car("a","b","c");
// echo $car->getColor();
// echo $car->getType();
// echo $car->getNumber();
// $car->setColor("東海道五十三次");
$car->drive();


echo "<br>";

require_once 'RaceCar.class.php';
$car = new RaceCar("sports","yello","23-23");
$car->drive();
echo "<br><h1>ニトロターボ発動！</h1><br>";
$car->boostDrive();
