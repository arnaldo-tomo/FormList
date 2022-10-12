<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Telefone;
use Illuminate\Http\Request;

class relacao extends Controller
{
    public function rela()
    {
        // hasOne
        // $Alunos = Aluno::find(1);
        // $telefone = Telefone::find(1);
        // echo $telefone;

        $resultado = Aluno::find(1)->numeros;
        foreach ($resultado as $nado) {
            echo $nado->numero . "<br>";
        }
    }
}