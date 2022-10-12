@extends('include.header')

@section('home')
    <div class="contianer">
        {{-- <div class="col-sm-4  from-content offset-sm-4">

                <h4> {{ config('constantes.APP') }}</h4>
                <hr>
                @if (session('erro'))
                    <div class="alert alert-primary role">
                        {{ session('erro') }}
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-danger role">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger role">
                            <div class="display">
                                <strong> {{ $error }}</strong>
                            </div>
                        </div>
                    @endforeach
                @endif
                <form action="{{ route('auth') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="my-input">Email:</label>
                        <input id="my-input" placeholder="Informe o Usuario" class="form-control" type="text"
                            value="{{ old('usuario') }}" name="usuario">
                    </div>

                    <div class="form-group">
                        <label for="my-input">Usuario:</label>
                        <input id="my-input" placeholder="Informe a Senha" class="form-control" type="text"
                            value="{{ old('senha') }}" name="senha">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Envair</button>
                    </div>

                    <a href="">Registar-se</a>
                </form>



            </div> --}}

        <div class="col">
            @foreach ($apiArrasy as $res)
                <div class="row">
                    <div class="col">
                        {{ $res['id'] }}
                    </div>
                    <div class="col-sm">
                        {{ $res['title'] }}
                    </div>
                    <div class="col-sm">
                        <img src="{}">
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
