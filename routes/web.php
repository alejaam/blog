<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos', function () {
    return "Bienvenido a la pagina de cursos";
});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    return $categoria? "Bienvenido al curso: $curso, de la categoria $categoria" :  "Bienvenido al curso: $curso";
});

Route::get('/', HomeController::class); 