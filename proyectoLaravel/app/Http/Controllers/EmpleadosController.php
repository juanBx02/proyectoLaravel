<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){
        $titulo = "Vista principal de empleados";
        $empleados = [
            ['nombre'=>'Luis'],
            ['nombre'=>'Pedro'],
            ['nombre'=>'Samuel'],
            ['nombre'=>'Ana'],
        ];
        return view('Empleados.index', compact('titulo', 'empleados'));
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
