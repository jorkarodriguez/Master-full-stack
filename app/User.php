<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname','description' ,'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     /// lo QUE ESTA EN HIDEN NO SE MUESTRA O NO SE 
     //DEVUELVE EN UNA CONSULTA.
     //UN MODELO ES UNA CLASE QUE HACE LA CONECCION A LA BASE
     //BASE DE DATOS Y REGRESA // HACE EL MAPEO RELACIONAL DE OBJETOS
     //ORM
    protected $hidden = [
        'password', 'remember_token',
    ];

    /// relacion de uno a muchos 

    public function posts()
    {
        return  $this->hasMany('App\Post');
    }
}
