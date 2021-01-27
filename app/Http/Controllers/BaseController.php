<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->get();
    }

    public function show($id)
    {
        return $this->model->find($id);
    }

    public function store(Request $request)
    {
        return $this->model->create(request()->all());
    }

    public function update(Request $request, $id)
    {
        $res = $this->model->find($id)->update(request()->all());
        return response()->json($res);
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}
