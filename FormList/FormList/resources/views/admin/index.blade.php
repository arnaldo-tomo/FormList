@extends('include.header')
@section('home')

<div class="contianer">
    <div class="row mt-5">

        <div class="col-sm-4 offset-sm-4">
            <h4>Registar-se</h4>
                @if (session('status'))
                      <div class="alert alert-danger">
                        {{session('status')}}
                      </div>
                @endif
                <div class="tabel table-striped">
            <form action="{{route('registar')}}" method="post">
                @csrf
                       <div class="form-group">
                         <label for="my-input">Email:</label>
                         <input id="my-input" placeholder="registar O Usuario" class="form-control" type="text"  name="usuario">
                       </div>

                       <div class="form-group">
                         <label for="my-input">Usuario:</label>
                         <input id="my-input" placeholder="Registar a Senha Do Usuario" class="form-control" type="text"name="senha">
                       </div>

                       <div class="form-group">
                         <button class="btn btn-danger"  type="submit">Registar</button>
                       </div>
                      <a href="{{route('home')}}">voltar Para login</a>
            </form>
</div>
        </div>
    </div>
</div>

@endsection


