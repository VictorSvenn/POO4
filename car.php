<?php

require_once "vehicle.php";
require_once "LightableInterface.php";

class car extends vehicle implements LightableInterface {
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;
    private $hasParkBrake= true;
    private $state = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function setParkBrake()
    {
        if($this->hasParkBrake===true){
            $this->hasParkBrake=false;
        }
    }
    public function start()
    {
            $this->state = true;
            if ($this->hasParkBrake === true) {
                throw new Exception();
            }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function switchOn():bool
    {
        echo "Mes phares sont au top!";
        return true;
    }
    public function switchOff(): bool
    {
        echo "Extinction des feux!";
        return false;
    }

}