<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
</head>

<body>


    <h1>WELCOME TO THE HOME PAGE!</h1>
    <p>Olá {{ $name }}, essas são as matérias:</p>


    @foreach ($subjects as $s)
        <li>{{ $s }}</li>
    @endforeach

</body>

</html>
