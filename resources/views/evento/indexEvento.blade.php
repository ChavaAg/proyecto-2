<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evento</title>
</head>
<body>
    <h1>Evento index</h1>
    <a href="evento/create">Crear evento</a>

    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('evento') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
    @endif

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        this.closest('form').submit();">
            Salir
        </a>
    </form>

    <table border>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Lugar</th>
            <th>Grupo</th>
            <th>Acciones</th>
        </tr>

        @foreach ($eventos as $evento)
            <tr>
                <td>{{$evento->id}}</td>
                <td>{{$evento->nombre}}</td>
                <td>{{$evento->lugar}}</td>
                <td>{{$evento->grupo}}</td>
                <td>
                    <a href="evento/{{$evento->id}}">Ver detalle</a>
                    <a href="evento/{{$evento->id}}/edit">Editar</a>
                    <form action="/evento/{{$evento->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
