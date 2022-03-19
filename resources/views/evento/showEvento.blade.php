<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
</head>
<body>
    <h1>Detalles del evento</h1>

    <table border>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Lugar</th>
            <th>Grupo</th>
            <th>Descripcion</th>
        </tr>
            <tr>
                <td>{{$evento->id}}</td>
                <td>{{$evento->nombre}}</td>
                <td>{{$evento->lugar}}</td>
                <td>{{$evento->grupo}}</td>
                <td>{{$evento->descripcion}}</td>
            </tr>
    </table>
</body>
</html>
