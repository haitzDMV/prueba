<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
</head>
<body>
    <h1>Editar tarea</h1>
    <form action="/tareas/update/{{$tarea->id}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="titulo" value="{{$tarea->titulo}}">
        <input type="text" name="descripcion" value="{{$tarea->descripcion}}">
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador)
            <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido}}</option>
            @endforeach
        </select>
        <input type="date" name="fecha_limite" value="{{$tarea->fecha_limite}}">
        
        <input type="submit" value="Actualizar tarea">
    </form>
</body>
</html>