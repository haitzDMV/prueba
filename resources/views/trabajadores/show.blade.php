<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista trabajadores</h1>
    <h3>Trabajador: {{ $trabajador->nombre }}  {{ $trabajador->apellidos }} {{ $trabajador->dni }}</h3>

    <h3>Tareas:</h3>
    <ul>
        
        @foreach ($tareas as $tarea)
        <li>{{ $tarea->titulo }}</li>
        @endforeach
    </ul>
    <a href="/trabajadores/create">Añadir trabajadores</a>

</body>
</html>
