<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DogModel;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        try {
            $dogs = DogModel::all();
            return response()->json($dogs, 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Nenhum registro encontrado na base dados!', 'error' => $e->getMessage()], 500);
        }
    }

    public function show(DogModel $dog)
    {
        try {
            return response()->json($dog, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Dog não encontrado!', 'error' => $e->getMessage()], 422);
        } catch (Exception $e) {
            return response()->json(['message' => 'Ocorreu um erro ao processar a solicitação!', 'error' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        return DogModel::create($request->all());
    }

    public function update(Request $request, DogModel $dog)
    {
        $dog->update($request->all());
        return $dog;
    }


    public function destroy(DogModel $dog)
    {
        return $dog->delete();
    }
}