<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Models\Superheroe;

Route::get('/', function () {

    $superheroe = Superheroe::where('gender', 'male')->get();

    return response()->json([
        'superheroe' => $superheroe
    ]);

});



//Route::get('/universes', [UniverseController::class, 'index']);

Route::resource('/universes', UniverseController::class);