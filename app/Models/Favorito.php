<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';
    protected $fillable = ['id_usuario', 'id_pokemon', 'created_at', 'updated_at'];
}
