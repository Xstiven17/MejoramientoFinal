<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Principal</title>
</head>
<body>

    <h1>Productos</h1>
    <a href="{{ route('ventas1.create') }}">Crear Producto</a>
    <ul>
        @foreach ($productos as $producto)
            <li>
                <a href="{{ route('ventas1.show', $producto->id) }}">{{ $producto->nombre }}</a>
                <a href="{{ route('ventas1.edit', $producto->id) }}">Editar</a>
                <form action="{{ route('ventas1.destroy', $producto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>