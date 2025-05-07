<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidades;
use App\Models\Servicio; 
class EntidadesController extends Controller
{
    public function index()
    {
        $entidades = Entidades::all();
        $servicios = \App\Models\Servicio::all();
        return view('user.interface', compact('entidades', 'servicios'));
    }
}
