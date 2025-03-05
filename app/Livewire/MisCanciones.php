<?php

namespace App\Livewire;

use App\Models\Album;
use App\Models\Artista;
use App\Models\Cancion;
use Livewire\Component;

class MisCanciones extends Component
{
    public $titulo, $fecha_salida, $artista_id;

    public function guardar()
    {

        $this->validate([
            'titulo' => 'required|string|max:50',
            'fecha_salida' => 'required|date',
            'artista_id' => 'required|exists:artistas,id'
        ]);

        Cancion::create([
            'titulo' => $this->titulo,
            'fecha_salida' => $this->fecha_salida,
            'artista_id' => $this->artista_id
        ]);
    }

    public function render()
    {
        return view('livewire.mis-canciones', ['canciones' => Cancion::all(), 'artistas' => Artista::all(), 'albumes' => Album::all()]);
    }
}
