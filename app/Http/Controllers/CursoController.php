<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina principal de cursos";
    }

    public function create(){
        return "Bienvenido, aqui podras crear tus cursos";

    }

    public function show($curso){
        return "Bienvenido al curso: $curso";
    }
}