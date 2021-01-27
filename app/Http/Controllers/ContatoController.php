<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Http\Requests\ContatoStoreRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;

class ContatoController extends BaseController
{
    protected $model;

    public function __construct(Contato $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ContatoStoreRequest::rules(), ContatoStoreRequest::messages());


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()], 422);
        }

        $data = $request->all();
        $data['ip'] = request()->ip();

        if ($request->hasFile('arquivo')) {
            $arquivo = uniqid(date('HisYmd')) . '.' . $request->arquivo->extension();

            $disk = \Storage::disk('public');
            $disk->putFileAs("arquivos", $request->arquivo, $arquivo);
            $url = $disk->url("arquivos/{$arquivo}");

            $data['arquivo'] = $url;
        }
        
        $contato = $this->model->create($data);
        
        if($contato){
            Mail::to(ENV('MAIL_FROM_ADDRESS'))->send(new ContatoMail($contato));
        };

        return $contato;
    }
}
