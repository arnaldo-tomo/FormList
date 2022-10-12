<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'usuario' => 'required',
            'senha' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'usuario.required' => 'O E-mail e de caracter Obrigatotio',
            'senha.required' => 'Preencha o campo com a sua senha,com minino min: carecateres',
        ];
    }
}