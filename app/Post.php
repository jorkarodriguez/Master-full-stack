<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //utiliza la tabla post para sacar los datos
    protected $Table='post';
    //relacion de muchos a uno 

    public function user(){
        /*
        hace la busqueda por medio del user id 
        lo que hace es filtrar por medio del id que se selecciona 
        para que no saque los de todos los usuarios 
        */
        return $this->belongsTo('App\User','user_id');
    }

    public function Category(){
        /*
        
        */
        return $this->belongsTo('App\Category','category_id');
    }
}
