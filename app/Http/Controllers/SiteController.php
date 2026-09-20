<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{

    public function index ()
    {
        $nome = 'Lucas Muniz';
        $habits = ['Ler', 'Correr', 'Estudar', 'Viajar',]; 

        return view('home', compact('nome', 'habits'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
