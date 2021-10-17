<?php

use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase {

    public function testExepctNomeCompleto() {

        $this->expectOutputString('Asafe Marques');

        $usuario = new Usuario();
        $usuario->setNome("Asafe");
        $usuario->setSobrenome("Marques");
        $usuario->getNomeCompleto();
    }

    public function testIdade() {
        /*
        $usuario = new Usuario();
        $usuario->setIdade(90);

        $this->assertEqual(90, $usuario->getIdade());
        */

        $this->markTestIncomplete('Falta implementar set e get de Idade');
    }
}