<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\LoginRequest;


use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index()
    {




        $resposta = Http::get('https://jsonplaceholder.typicode.com/photos');

        $apiArrasy = $resposta->json();

        return view('/home', ['apiArrasy' => $apiArrasy]);

        // if (session('logado')) {
        //     return redirect()->route('dashboard')->with('status', 'vOce ja esta logado brother');
        // }
        // return view('home');
    }

    public function admin()
    {

        return view('admin.index');
    }

    public function dashboard()
    {
        if (!session('logado')) {
            return redirect()->route('home')->with('status', 'Vc nao esta logado');
        }
        return view('dashboard');
    }

    public function auth(LoginRequest $request)
    {
        // validadacao de campos
        $request->validated();
        // verificar se o susuario existe
        $query_ru = usuarios::where('email', $request->email)->first();
        //    Verificar  se Existe o susuario
        if (isset($query_ru) == 0) {
            return redirect('/')->with('status', 'Nao foi encontrado o Usuario');
        }
        //    Verificar se a senha corresponde ao que na DB
        if (!hash::check($request->password, $query_ru->password)) {
            return redirect('/')->with('status', 'Senha Incoreta');
        }


        Session::put('logado', 'sim');
        // session()->put('logado');
        Session::put('usuario', $query_ru->usuario);
        return redirect()->route('dashboard');

        // if (Auth::attempt(['usuario' => $request->usuario, 'senha' => $request->senha])) {
        //     return view('dashboard')->with('logado');
        // } else {
        //     return redirect('/')->with('status', 'Senha Incoreta');
        // }
    }

    public function registar(Request $request)
    {
        $query_ru = usuarios::where('usuario', "=", $request->usuario)->orWhere('senha', "=", $request->senha)->get();

        if ($query_ru->count() != 0) {
            return redirect('admin')->with('status', ' O E-mail Invalido,ja foi registado');
        } else {

            $novo = new usuarios;
            $novo->usuario = $request->usuario;
            $novo->senha = hash::make($request->senha);
            $novo->save();
            return redirect('/')->with('erro', ' O Usuareio foi Registado com sucessos');
        }
    }


    public function logout()
    {
        Session::flush();
        Session()->flush();
        return redirect('/');
    }

    // public function autoSave()
    // // use Illuminate\Support\Facades\Hash;
    // // Usamos essa funcao com o Metedo use Illuminate\Support\Facades\Hash; para podermos CADASTRAR  o primeiro User duma forma segura na nossa base de dado
    // {
    //     $usuario = new usuarios;
    //     $usuario->usuario = "admin@gamil.com";
    //     $usuario->senha = Hash::make('admin');
    //     $usuario->save();
    // }
    // public function auth(LoginRequest $request)
    // {
    //     $request->validated();
    //     $usuario = $request->input('usuario');
    //     $senha = $request->input('senha');
    //     echo " FEITO";
    //     // $username = $request->validate(['username' => 'required']);
    // }
}
