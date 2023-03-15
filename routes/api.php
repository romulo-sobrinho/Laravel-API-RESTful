<?php

use App\Http\Controllers\DogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('dogs')->controller(DogController::class)->group(
    function () {
        Route::get('/', 'index');
        Route::get('/show/{dog}', 'show');
        Route::post('/store', 'store');
        Route::patch('/update/{dog}', 'update');
        Route::delete('/destroy/{dog}', 'destroy');
    }
);

// Route::apiResource(DogController::class);