<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto</title>
</head>
<body>
    
    <h1>Editar Producto</h1>
    <form action="{{ route('ventas1.update', $productos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" value="{{ $productos->codigo }}" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $productos->nombre }}" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" value="{{ $productos->precio }}" required>
        <br>
        
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('ventas1.index') }}">Volver</a>

</body>
</html>