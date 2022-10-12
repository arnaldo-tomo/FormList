<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $filable = ['nome', 'sala', 'curso'];
    // hasOne
    // public function telefone()
    // {
    //     return $this->hasOne('App\Models\telefone');
    // }

    public function numeros()
    {
        return  $this->hasMany('App\Models\telefone');
    }
}