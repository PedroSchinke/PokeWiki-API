<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';
    protected $fillable = ['user_id', 'pokemon_id', 'created_at', 'updated_at'];
}
