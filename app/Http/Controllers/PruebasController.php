<?php
/*
un controlador lo que hace es utilizar el modelo 
que se haya creado antes 
para poder hacer que un modelo haga lo que uno quiere de primero 
hay que importar la clase del modelo y luego se puede hacer 
referencia a esa clase como mas se me de la gana.
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

class PruebasController extends Controller
{
    public function index()
    {
        $titulo = 'animales';
        $animales = ['perro', 'Gato', 'tigre'];

        return view('prueba.index', array(
            'titulo' => $titulo,
            'animales' => $animales
        ));
    }


    public function thesORM()
    {

        //post:: all es como hacer un select * from 

        /*  $Posts = Post::all();
        //var_dump($Posts);

        foreach ($Posts as $post) {
            echo "<h1>" . $post->title . "</h1>";
            echo "<p>" . $post->content . "</p>";
            echo "<span>{$post->user->name}----{$post->category->name}</span>";
            echo '<hr>';
        }
*/

        $categorias = Category::all();
        foreach ($categorias as $category) {

            echo "<h1> {$category->name} </h1>";

            foreach ($category->posts as $post) {

                echo '<h1>' . $post->title . '</h1>';
                echo  "<span>{$post->user->name}----{$post->category->name}</span>";
                echo "<p>{$post->content}</p>";
            }
            echo "<hr>";
        }


        die();
    }
}
