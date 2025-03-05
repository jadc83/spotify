<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /** @use HasFactory<\Database\Factories\AlbumFactory> */
    use HasFactory;

    Protected $table = 'albumes';

    public function canciones()
    {
        return $this->belongsToMany(Cancion::class, 'album_cancion', 'album_id', 'cancion_id')->withPivot('duracion');
    }
}
