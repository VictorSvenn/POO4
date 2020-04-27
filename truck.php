<?php

require_once "vehicle.php";

class Truck extends Vehicle
{
    private $storage;
    private $load=0;

    public function __construct(string $color, int $nbSeats, int $load, int $storage)
    {
        parent::__construct($color, $nbSeats);
        $this->load=$load;
        $this->storage=$storage;
    }

    /**
     * @return int|string
     */
    public function getLoad()
    {
        if($this->load<$this->storage){
            echo "in filling";
            echo "<br />";
            echo "Actual charge: ".$this->load."/".$this->storage;
        }
        else{
            echo "full";
        }
        return $this->load;
    }

    /**
     * @param int|string $load
     */
    public function setLoad($load)
    {
        $this->load = $load;
    }

    /**
     * @return string
     */
    public function getStorage()
    {
        return $this->storage;
    }
}