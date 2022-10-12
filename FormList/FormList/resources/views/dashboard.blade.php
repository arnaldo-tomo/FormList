<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('constantes.TITULO')}}</title>
</head>
<body>
            <h1>Usuario:: {{session('usuario')}} </h1>
            <a  href="/logout">Logout</a>
            @if (session('status'))
            <hr>
            <h1>{{session('status')}}</h1>

            @endif
</body>
</html>
