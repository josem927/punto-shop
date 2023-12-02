<?php

// app/Http/Controllers/MujeresController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MujeresController extends Controller
{
    public function index()
    {
        // Página principal de la sección de mujeres
        return view('mujeres.index');
    }

    public function blusas()
    {
        // Página de blusas
        return view('mujeres.blusas');
    }

    public function faldas()
    {
        // Página de faldas
        return view('mujeres.faldas');
    }

    public function vestidos()
    {
        // Página de vestidos
        return view('mujeres.vestidos');
    }

    public function accesorios()
    {
        // Página de accesorios
        return view('mujeres.accesorios');
    }
}
