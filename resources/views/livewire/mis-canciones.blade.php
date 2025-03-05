<div>
      {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="w-full bg-orange-300 p-4 flex items-center space-y-4">
        <label for="titulo" class="text-center">Título de la cancion</label>
        <input type="text" wire:model="titulo" name="titulo" class="border p-2 rounded w-full max-w-xs">

        <label for="fecha_salida" class="text-center">Fecha de Salida</label>
        <input type="date" wire:model="fecha_salida" name="fecha_salida" class="border p-2 rounded w-full max-w-xs">

        <label for="artista_id" class="text-center">Artista</label>
        <select wire:model="artista_id" class="border p-2 rounded max-w-xs">
            <option value="">Selecciona artista</option>
            @foreach ($artistas as $artista)
                <option value="{{ $artista->id }}">{{ $artista->nombre }}</option>
            @endforeach
        </select>

        <x-primary-button wire:click="guardar" class="w-full max-w-xs">Guardar</x-primary-button>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Artista</th>
                    <th>Fecha de salida</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($canciones as $cancion)
                    <tr>
                        <td>{{$cancion->titulo}}</td>
                        <td>{{$cancion->artista->nombre}}</td>
                        <td>{{$cancion->fecha_salida}}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>

