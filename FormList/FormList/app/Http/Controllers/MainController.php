<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index()
    {
        $resposta = Http::get('https://jsonplaceholder.typicode.com/photos');

        return view('/home', compact($resposta));

        return view('dashboard');
    }
}
