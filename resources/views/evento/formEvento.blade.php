<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Evento</title>
</head>

<body>
    <h1>Formulario de Eventos</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/evento" method="POST">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="lugar">Lugar</label>
        <input type="text" name="lugar"><br>
        <label for="grupo">Grupo</label>
        <input type="text" name="grupo"><br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
