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
            
            <form action="/tareas/delete/{{$tarea->id}}" method="post">
                @csrf
                @method('delete')
                <li>
                    <a href="/tareas/edit/{{$tarea->id}}">{{ $tarea->titulo }}</a>
                </li>
                <input type="submit" value="Borrar">
            </form>
            

        @endforeach
    </ul>
    
    <a href="/tareas/create">Añadir tarea</a>
    <a href="/tareas/edit">Editar tarea</a>
</body>
</html>
