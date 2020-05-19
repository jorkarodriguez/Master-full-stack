<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $Table='post';
    //relacion de muchos a uno 

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function Category(){
        return $this->belongsTo('App\Category','category_id');
    }
}
