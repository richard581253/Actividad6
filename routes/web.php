<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;

Route::get('/', function () {
    
    return response()->json([
        'status'=> true,
        'universes' => Universe::all()

    ]);
});