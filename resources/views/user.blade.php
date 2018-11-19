<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios - algo</title>
</head>
<body>
    <h1> {{$tittle}} </h1>

    <ul>
        @forelse($users as $user)
                <li>{{$user}}</li>
            @empty 
                <p>No hay usuarios registrados</p>
        @endforelse
    </ul>
</body>
</html>