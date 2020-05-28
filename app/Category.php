<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//MAPEO Y HACE QUE TODA LA TABLA DE BASE DE DATOS 
//SE COMPORTE COMO UN OBJETO
class Category extends Model
{
    protected $table='Categories'; //SE SELECCIONA LA TABLA 
    //A LA CUAL QUIERO UTILIZAR EL MODELO

    ///relacion de uno a muchos ES LA DE hasMany
    public function posts(){
        return $this->hasMany('App\Post');
        //devuelve todos los objetos de tipos post 

    }
}
