<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DogModel;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        return DogModel::all();
    }

    public function show(DogModel $dog)
    {
        return $dog;
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
