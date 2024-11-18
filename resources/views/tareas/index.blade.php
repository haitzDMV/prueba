<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista tareas</h1>
    <ul>
        @foreach ($tareas as $tarea)
            <li>
                <a href="/tareas/edit/{{$tarea->id}}">{{ $tarea->titulo }}</a> <a href="/tareas/delete/{{$tarea->id}}">Borrar</a> 
            </li>

        @endforeach
    </ul>
    
    <a href="/tareas/create">Añadir tarea</a>
    <a href="/tareas/edit">Editar tarea</a>
</body>
</html>
