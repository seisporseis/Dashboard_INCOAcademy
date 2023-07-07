<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 
        'apellido',
        'email', 
        'telefono', 
        'programa', 
        'cprograma', 
        'vivesE', 
        'fnacimiento', 
        'residencia', 
        'pnacimiento', 
        'sprofesional', 
        'situacion', 
        'neducacion', 
        'permisoTrabajo', 
        'tienes_ordenador', 
        'cingles',
        'disponibilidad'];

        public function pais()
        {
            return $this->hasOne(paises::class);
        }
    
        public function provincia()
        {
            return $this->hasOne(provincias::class);
        }
}
