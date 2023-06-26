<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit',[FormController::class,'submit'])->name('form.submit');
