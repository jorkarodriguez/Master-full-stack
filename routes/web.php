<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/pruebas/{nombre?}', function ($nombre = null) {
    return view('Usuario', array(
        'nombre' => $nombre
    ));
});

Route::get('/animales', 'PruebasController@index');

Route::get('/test-orm', 'PruebasController@thesORM');

/*
*get: consigue datos o recutsos 
*post:  guardar  datos o recursos o hacer una logica 
desde un formulario 

*put: actualizar recursos o datos 

* Delete: eliminar datos o recursos


*/
// rutas de api

//rutas de prueba
Route::get('usuario/pruebas', 'UserController@pruebas');
Route::get('categoria/pruebas', 'CategoryController@pruebas');
Route::get('entradas/pruebas', 'PostController@pruebas');
//rutas oficiales del controlador de usuario

//se hace la ruta por post porque es un dato que va a la db

/*metodos http comunes
*GET: CONSEGUIR DATOS O RECURSOS
*POST: GUARDAR DATOS O RECURSOS O HACER LOGICAS DESDE UN FORMULARIO
*PUT: ACTUALIZAR 
*DELETE: ELIMINAR DATOS O RECUTSOS.
*/
Route::post('api/register', 'UserController@register');
Route::post('api/login', 'UserController@login');

//como hacer un cliente resful
//
