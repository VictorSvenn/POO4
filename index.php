<?php

require_once "bicycle.php";
require_once "car.php";
require_once 'vehicle.php';
require_once "truck.php";


$k2000= new car("black","2","fuel");
try{
    $k2000->start();
}catch(Exception $e){
    $k2000->setParkBrake();
}finally{
    echo "Ma voiture roule comme un donut";
}


