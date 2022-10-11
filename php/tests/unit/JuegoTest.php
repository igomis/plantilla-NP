<?php

class DvdTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        include_once('./src/Juego.php');
    }

    // tests
    public function testJuego1Jugador()
    {
        $juego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);
        $this->assertEquals('Para 1 Jugador',$juego->muestraJugadoresPosibles());
    }

    public function testJuegoVariosJugadores()
    {
        $juego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 2, 4);
        $this->assertEquals('Para 2 a 4 Jugadores',$juego->muestraJugadoresPosibles());
    }

    public function testJuegoUnosJugadores()
    {
        $juego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 2, 2);
        $this->assertEquals('Para 2 Jugadores',$juego->muestraJugadoresPosibles());
    }





}