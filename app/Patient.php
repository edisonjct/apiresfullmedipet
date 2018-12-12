<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    const PRODUCTO_ACTIVO = '0';
    const PRODUCTO_INACTIVO = '1';

    public $timestamps = false;

    protected $table = 'paciente';

    protected $fillable = [
        'pacNombre',
        'pacSexo',
        'pacEdad',
        'pacObservacion',
        'pacFoto',
        'pacColor',
        'pacMicrochip',
        'pacEstado',
        'pacRelimina',
        'pacElimina',
        'peloreja',
        'pacUser',
        'pacEspecie',
        'pacRaza',
        'pacFechaNaci',
        'cliID'
    ];



}
