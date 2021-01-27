<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContatoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoreContato()
    {
        $data = [
            'nome' => 'Bruno Santos',
            'email' => 'bruno@brunoweblink.com',
            'telefone' => '96981017603',
            'mensagem' => 'Teste',
            'arquivo' => new \Illuminate\Http\UploadedFile(public_path('arquivo_teste.pdf'), 'arquivo_teste.pdf', null, null, true),
        ];

        $response = $this->post('/api/contatos', $data);
        $response->assertStatus(201);
    }
}
