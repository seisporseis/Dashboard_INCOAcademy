<?php

namespace App\Http\Controllers;
use App\Models\alumno;
use Illuminate\Http\Request;

class AppController extends Controller
{
      public function dashboard(Request $request){

        $alumnos = Alumno::all();

        return view('app.dashboard', compact('alumnos'));

    }
    public function registros()
    {
        return view('app.registros',[

        ]);
    }
    public function charts()  {
        $edades = [10, 1, 3, 15, 12, 1];
        
        $datos = [];
        $datos['edades'] = $edades;

        
        return view('app.charts', ['datos' => $datos]);
    }
}