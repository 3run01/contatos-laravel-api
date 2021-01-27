<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Contato;

class ContatoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testStoreContato()
    {
        $contato = new Contato;

        $expected = [
            'nome',
            'email',
            'telefone',
            'mensagem',
            'arquivo',
        ];


        $arrayCompared = array_diff($expected, $contato->getFillable());
        $this->assertEquals(0, count($arrayCompared));
    }
}
