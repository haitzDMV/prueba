<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas';
    
    //protected $fillable = ['titulo', 'descripcion', 'fecha_limite', 'trabajador_id'];

    public function trabajadores() {
        //Una tarea -> un trabajador

        /*
        Trabajador  1  :  N  Tarea
        hasMany               belongsTo

                    1  :  1
        hasOne/Many           belongsTo
        */

        

        return $this->belongsTo(Trabajador::class);
    }


}
