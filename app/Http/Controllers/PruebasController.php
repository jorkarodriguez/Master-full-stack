<?php

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
