<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4" style="max-width: 600px">
    <h1 class="mb-4">Editar Producto</h1>

    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf @method('PUT')
        @include('productos._form')
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</body>
</html>