<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    /** @use HasFactory<\Database\Factories\CancionFactory> */
    use HasFactory;

    Protected $table = 'canciones';
    Protected $fillable = ['titulo', 'fecha_salida', 'artista_id'];

    public function albumes()
    {
        return $this->belongsToMany(Album::class, 'album_cancion', 'cancion_id', 'album_id')->withPivot('duracion');
    }

    public function artista()
    {
        return $this->belongsTo(Artista::class);
    }


}
