<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entidades', [EntidadesController::class, 'index'])->name('entidades.index');

