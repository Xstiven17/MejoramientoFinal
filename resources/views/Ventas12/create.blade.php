<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>

    <form action="{{ route('ventas1.store') }}" method="POST">
        @csrf
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required>
        <br>
        
        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('ventas1.index') }}">Volver</a>

</body>
</html>
