<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DogRequest;
use App\Models\DogModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DogController extends Controller
{
    public function index()
    {
        $dogs = DogModel::all();

        if (!$dogs) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao recuperar os registros de cães'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'data' => $dogs
        ], 200);
    }

    public function show(DogModel $dog)
    {
        // try {
        //     return response()->json([
        //         'success' => true,
        //         'data' => $dog
        //     ], 200);
        // } catch (ModelNotFoundException $eh) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Raça de cães não encontrada!'
        //     ], 404);
        // }

        return response()->json([
            'success' => true,
            'data' => $dog
        ], 200);
    }

    public function store(DogRequest $request)
    {
        $dog = DogModel::create($request->all());

        if (!$dog) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar a raça de cães'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Raça de cães cadastrada com sucesso',
            'data' => $dog
        ], 201);
    }

    public function update(DogRequest $request, DogModel $dog)
    {
        $dog->update($request->all());

        if (!$dog) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar a raça de cães'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Raça de cães atualizada com sucesso!',
            'data' => $dog
        ], 200);
    }


    public function destroy(DogModel $dog)
    {
        $deleted = $dog->delete();

        if (!$deleted) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir a raça de cães'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Raça de cães excluída com sucess!',
            'data' => [],
        ], 200);
    }
}
