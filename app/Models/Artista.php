<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    public function canciones()
    {
        return $this->hasMany(Cancion::class);
    }
}
