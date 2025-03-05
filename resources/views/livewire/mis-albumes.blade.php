<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  <div class="w-full bg-orange-300 p-4 flex items-center space-y-4">
      <label for="album_id" class="text-center">Título del album</label>
      <select wire:model="album_id" class="border p-2 rounded max-w-xs">
        <option value="">Selecciona album</option>
        @foreach ($albumes as $album)
            <option value="{{ $album->id }}">{{ $album->titulo }}</option>
        @endforeach
    </select>

      <label for="cancion_id" class="text-center">Cancion</label>
      <select wire:model="cancion_id" class="border p-2 rounded max-w-xs">
          <option value="">Selecciona cancion</option>
          @foreach ($canciones as $cancion)
              <option value="{{ $cancion->id }}">{{ $cancion->titulo }}</option>
          @endforeach
      </select>

      <label for="duracion" class="text-center">Duracion</label>
      <input type="number" wire:model="duracion">

      <x-primary-button wire:click="enlazar" class="w-full max-w-xs">Enlazar</x-primary-button>
  </div>

  <div>
    @foreach ($albumes as $album)
        <p class="text-xl">{{$album->titulo}}</p>
        @foreach ($album->canciones as $cancion)
        <p>- {{$cancion->titulo}} {{minutos($cancion->pivot->duracion)}}</p>
        @endforeach
    @endforeach
  </div>
</div>

