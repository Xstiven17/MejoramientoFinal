<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>

    <h1>{{ $productos->nombre }}</h1>
    <p><strong>Código:</strong> {{ $productos->codigo }}</p>
    <p><strong>Nombre:</strong> {{ $productos->nombre }}</p>
    <p><strong>Precio:</strong> {{ $productos->precio }}</p>
    <a href="{{ route('ventas1.edit', $productos->id) }}">Editar</a>
    <a href="{{ route('ventas1.index') }}">Volver</a>

</body>
</html>
