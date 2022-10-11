<?php

class DvdTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        include_once('./src/Dvd.php');


    }

    protected function _after()
    {
    }

    // tests
    public function testPreuAmbIva()
    {
        $cinta = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
        $this->assertEquals(18.15,$cinta->getPrecioConIVA());
    }





}