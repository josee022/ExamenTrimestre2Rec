<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cambio extends Model
{
    use HasFactory;

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }

    public function ordenador()
    {
        return $this->belongsTo(Ordenador::class);
    }
}
