<?php

use App\Http\Controllers\DogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rota resource
Route::resource('dogs', DogController::class);



// Rota resource substitui a rotas abaixo

// Route::prefix('dogs')->controller(DogController::class)->group(
//     function () {
//         Route::get('/', 'index');
//         Route::get('/show/{dog}', 'show');
//         Route::post('/store', 'store');
//         Route::patch('/update/{dog}', 'update');
//         Route::delete('/destroy/{dog}', 'destroy');
//     }
// );