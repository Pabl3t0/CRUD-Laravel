<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <body>
        <div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">
                <h1>CRUD DE PRODUCTOS</h1>
                <h2></h2>
                <table class="table-auto border-collapse border border-gray-400">
                    <thead>Tabla</thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Fecha de Caducidad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    <tbody>
                        @php
                            $productos = null;
                        @endphp
                        @forelse ($productos as $producto)
                            <tr></tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->fecha }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No hay productos registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
        </div>
    </body>
</html>
