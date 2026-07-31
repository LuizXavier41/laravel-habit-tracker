<h1>WELCOME TO THE HOME PAGE!</h1>
<p>Olá {{ $name }}, essas são as matérias:</p>


@foreach ($subjects as $s)
    <li>{{ $s }}</li>
@endforeach
