<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrera extends Model
{
    use HasFactory;
    public function alumnos():HasMany{ //tiene muchos
        return $this->hasMany(Alumno::class);
    }

    public function depto():BelongsTo{ //pertenece a
        return $this->belongsTo(Depto::class);
    }
}
