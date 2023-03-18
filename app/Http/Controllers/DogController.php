<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DogRequest;
use App\Models\DogModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class DogController extends Controller
{
    public function index()
    {
        try {
            $dogs = DogModel::all();

            return response()->json([
                'success' => true,
                'data' => $dogs
            ], 200);
        } catch (\Throwable $th) {
            Log::error("Houve erro ao pesquisar todos os registros no banco de dados", [$th->getMessage(), $th->getTraceAsString()]);

            return response()->json([
                'success' => false,
                'message' => 'Erro ao recuperar os registros de cães'
            ], 500);
        }
    }

    public function show(DogModel $dog)
    {
        return response()->json([
            'success' => true,
            'data' => $dog
        ], 200);
    }

    public function store(DogRequest $request)
    {
        try {
            $dog = DogModel::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Raça de cães cadastrada com sucesso',
                'data' => $dog
            ], 201);
        } catch (\Throwable $th) {
            Log::error("Houve erro ao criar o registro no banco de dados", [$th->getMessage(), $th->getTraceAsString()]);

            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar a raça de cães'
            ]);
        }
    }

    public function update(DogRequest $request, DogModel $dog)
    {
        try {
            $dog->update($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Raça de cães atualizada com sucesso!',
                'data' => $dog
            ], 200);
        } catch (\Throwable $th) {
            Log::error("Houve erro ao atualizar o registro no banco de dados", [$th->getMessage(), $th->getTraceAsString()]);

            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar a raça de cães'
            ], 500);
        }
    }


    public function destroy(DogModel $dog)
    {
        try {
            $dog->delete();

            return response()->json([
                'success' => true,
                'message' => 'Raça de cães excluída com sucess!',
                'data' => [],
            ], 200);
        } catch (\Throwable $th) {
            Log::error("Houve erro ao excluir o registro no banco de dados", [$th->getMessage(), $th->getTraceAsString()]);

            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir a raça de cães'
            ], 500);
        }
    }
}
