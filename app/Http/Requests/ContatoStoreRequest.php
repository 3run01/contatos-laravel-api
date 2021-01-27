<?php

namespace App\Http\Requests;

class ContatoStoreRequest
{
    public static function rules()
    {
        return [
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'mensagem' => 'required',
            'arquivo' => 'required|file|max:500|mimes:pdf,jpg,doc,docx,odt,txt',
        ];
    }


    public static function messages()
    {

        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O e-mail informado é inválido.',
            'telefone.required' => 'O campo telefone é obrigatório',
            'mensagem.required' => 'O campo mensagem é obrigatório',
            'arquivo.required' => 'Arquivo para anexo é obrigatório',
            'arquivo.max' => 'O arquivo deve conter o tamanho máximo de :max KB',
            'arquivo.mimes' =>  'O arquivos aceitos são: pdf, jpg, doc, docx, odt ou txt',
            'aruivo.file' => 'Selecione um arquivo válido.'
        ];
    }

}
