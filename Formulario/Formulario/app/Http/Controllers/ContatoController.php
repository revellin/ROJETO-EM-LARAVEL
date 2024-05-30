<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function showForm()
    {
        return view('contato');
    }

    public function handleForm(Request $request)
    {
        $data = $request->all();
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}

