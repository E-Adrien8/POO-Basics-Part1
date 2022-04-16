<?php

//require_once 'Bicycle.php';
//$bike = new Bicycle();
//
//$bike->setColor('blue');
//$bike->setCurrentSpeed(0);
//$bike->setNbSeats(3);
//var_dump($bike);
//
//// Moving bike
//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
//echo $bike->brake();



require_once 'Car.php';

$car = new Car('red', 4,'electric');

try {
   $car->start();
} catch (Exception $e){
    $car->setParkBrake(false);

}finally {
    echo "Ma voiture roule comme un donut" . PHP_EOL;
}


//echo $car->forward();
//echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed(). ' km/h' . '<br>';
//echo $car->brake();
//echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed(). ' km/h' . '<br>';
//echo $car->brake();

