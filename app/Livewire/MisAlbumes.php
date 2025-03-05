<?php

namespace App\Livewire;

use App\Models\Album;
use App\Models\Cancion;
use Livewire\Component;

class MisAlbumes extends Component
{
    public $cancion_id, $album_id, $duracion;

    public function enlazar()
    {
        $album = Album::find($this->album_id);
        $cancion = Cancion::find($this->cancion_id);
        $duracion = $this->duracion;

        $album->canciones()->attach($cancion->id, ['duracion' => $duracion]);
    }

    public function render()
    {
        return view('livewire.mis-albumes', ['albumes' => Album::all(), 'canciones' => Cancion::all()]);
    }
}
