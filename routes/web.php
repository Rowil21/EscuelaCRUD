<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

Route::get('/', function () {
    return view('prueba');
});

Route::post('/personal', [PersonalController::class,'index'])->name('personal.index');

Route::resource('/personal', PersonalController::class);
