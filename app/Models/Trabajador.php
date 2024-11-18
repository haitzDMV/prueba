<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';

    public function tareas() {
        //Un trabajador -> varias tareas
        return $this->hasMany(Tarea::class);
    }
}
