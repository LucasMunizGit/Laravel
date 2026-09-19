<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{

    public function index ()
    {
        $nome = 'Lucas Muniz';
        $habits = ['Ler', 'Correr', 'Estudar', 'Viajar',]; 

        return view('home', [
            'name' => $nome,
            'habits' => $habits
        ]);
    }

}
