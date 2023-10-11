<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/empresas/{id}/niveles', [EmpleadoController::class, 'byEmpleado']);
Route::get('/empresas/{id}/niveles', 'EmpleadoController@byEmpleado');


