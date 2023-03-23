<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use iut\Radiator;
use iut\Thermometer;
use iut\iThermometer;

use Mockery\Adapter\Phpunit\MockeryTestCase;

/* php ./vendor/phpunit/phpunit/phpunit tests/RadiatorTest.php

Commande pour lancer les tests (ne fonctionne pas chez moi sans le 'php' devant) 

*/

require __DIR__ . '/../vendor/autoload.php';

class RadiatorTest extends MockeryTestCase {

    public function testUpdateThermostat() {
        
        //$mock = \Mockery::mock('Thermometer', 'iThermometer');

        $mock = \Mockery::mock(iThermometer::class);

        $radiator = new Radiator($mock);

        $mock->shouldReceive('outsideTemperature')->andReturn(3);

        $radiator->updateThermostatFromOutsideTemperature();

        $this->assertSame(3, $radiator->thermostat);

    }

}
