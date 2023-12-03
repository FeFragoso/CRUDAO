<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return
            view('componentes/header') .
            view('componentes/navegacao') .
            view('modulos/objetos/formulario') .
            view('componentes/footer');
    }
}
