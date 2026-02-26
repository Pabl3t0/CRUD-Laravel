<div class="mb-3">
    <label class="form-label">Nombre *</label>
    <input type="text" name="nombre" class="form-control"
           value="{{ old('nombre', $producto->nombre ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Precio *</label>
    <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" step="0.01" name="precio" class="form-control"
               value="{{ old('precio', $producto->precio ?? '') }}" required>
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Fecha de Caducidad *</label>
    <input type="date" name="fecha" class="form-control"
           value="{{ old('fecha', isset($producto) ? $producto->fecha->format('Y-m-d') : '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Stock *</label>
    <input type="number" name="stock" class="form-control"
           value="{{ old('stock', $producto->stock ?? 0) }}" min="0" required>
</div>