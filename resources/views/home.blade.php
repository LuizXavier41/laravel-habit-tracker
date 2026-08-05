<x-layout>
    <main class="py-10">
        <h1 class='text-2xl font-bold'>WELCOME TO THE HOME PAGE!</h1>
        <p class='text-red-700'>Olá {{ $name }}, essas são as matérias:</p>


        @foreach ($subjects as $s)
            <li class='text-red-400'>{{ $s }}</li>
        @endforeach
    </main>

</x-layout>
