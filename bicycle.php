<?php

require_once "vehicle.php";
require_once "LightableInterface.php";
//bicycle.php
class bicycle extends vehicle implements LightableInterface {

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            echo "Mon vélo éclaire sa mère";
            return true;
        }
        echo "J'roule pas assez vite pour avoir de la lumière";
        return false;
    }
    public function switchOff(): bool
    {
        echo "Il fait tout noir!";
        return false;
    }
}