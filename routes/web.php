<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\SrobdController;



Route::get('/', [EntidadesController::class, 'index'])->name('entidades.index');

Route::get('/entidades', [EntidadesController::class, 'show'])->name('entidades.index');

Route::post('/srobd', [SrobdController::class, 'srobd'])->name('entidades.srobd');

