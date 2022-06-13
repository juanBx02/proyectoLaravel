<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){
        $titulo = "Vista principal de empleados";
        return view('Empleados.index', compact('titulo'));
    }
    public function crear(){
        $titulo = "Vista crear de empleados";
        return view('Empleados.crear',compact('titulo'));
    }
    public function mostrar(){
        $titulo = "Vista mostrar de empleados";
        return view('Empleados.mostrar',compact('titulo'));
    }
    
    public function editar(){
        $titulo = "Vista editar de empleados";
        return view('Empleados.editar',compact('titulo'));
    }
}
