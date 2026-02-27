@vite('resources/css/app.css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<h1 class="text-center mt-5 align-self-center">CRUD de Productos</h1>

<div class="d-flex justify-content-center mb-3 mt-5">
    <a  href="{{ route('productos.create') }}" class="btn btn-primary ml-5">Nuevo Producto</a>
</div>
<table class="table table-striped table-bordered mt-5 ">

<thead class="bg-primary text-white">
    <tr class="text-center ">
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Fecha Caducidad</th>
        <th scope="col">Stock</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody class="table-group-divider ">
    @forelse($productos as $producto)
    <tr>
        <td>{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>${{ number_format($producto->precio, 2) }}</td>
        <td>{{ $producto->fecha ? $producto->fecha->format('d/m/Y') : 'Sin fecha' }}
</td>
        <td>
            @if($producto->stock == 0)
                <span class="badge bg-danger">Sin stock</span>
            @elseif($producto->stock <= 5)
                <span class="badge bg-warning text-dark">{{ $producto->stock }} (bajo)</span>
            @else
                {{ $producto->stock }}
            @endif
        </td>
        <td>
@if($producto->fecha && $producto->fecha->isPast())
    <span class="badge bg-danger">Caducado</span>
@elseif($producto->fecha && $producto->fecha->diffInDays(now()) <= 7)
    <span class="badge bg-warning text-dark">Por caducar</span>
@elseif($producto->fecha)
    <span class="badge bg-success">Vigente</span>
@else
    <span class="badge bg-secondary">Sin fecha</span>
@endif
        </td>
        <td>
            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-sm btn-warning">Editar</a>
            <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline"
                  onsubmit="return confirm('¿Eliminar este producto?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @empty
        <tr><td colspan="7" class="text-center">No hay productos registrados.</td></tr>
    @endforelse
</tbody>
</table>

<div class="mt-3 d-flex justify-content-center">
    {{ $productos->links() }}
</div>