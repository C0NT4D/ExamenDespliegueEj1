<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\DNI;
//aa
class DNITest extends TestCase {
    public function testCalcularLetraDNI() {
        $dni = new DNI(12345678);
        $resultado = $dni->getDNIConLetra(); 

        $this->assertEquals("12345678Z", $resultado);
    }
}
