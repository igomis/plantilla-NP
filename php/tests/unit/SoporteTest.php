<?php

class SoporteTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        include_once('./src/Soporte.php');


    }

    protected function _after()
    {
    }

    // tests
    public function testPreuAmbIva()
    {
        $soporte = new Soporte("Tenet", 22, 3);
        $this->assertEquals(3.63,$soporte->getPrecioConIVA());
    }

    public function testMuestraResumen()
    {
        $soporte = new Soporte("Tenet", 22, 3);

    }



}