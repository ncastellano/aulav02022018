<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contenido extends Model
{
   protected $table= "contenido";

    protected $fillable= ['descripcion'];
}
