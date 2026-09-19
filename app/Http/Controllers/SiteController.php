<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{

    public function index ()
    {
        $nome = 'Lucas Muniz';
        $habits = ['Ler', 'Correr', 'Estudar']; 

        return view('home',);
    }

}
