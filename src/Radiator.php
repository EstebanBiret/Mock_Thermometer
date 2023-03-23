<?php

namespace iut;
use iut\iThermometer;

class Radiator
{

    public int $thermostat;
    private iThermometer $thermometer;

    function __construct(iThermometer $thermometer) {
        $this->thermometer = $thermometer;
        $this->thermostat = 0;
    }

    public function updateThermostatFromOutsideTemperature() {
        if ($this->thermometer->outsideTemperature() < 10) {
            $this->thermostat = 3;
        }
    }
}
