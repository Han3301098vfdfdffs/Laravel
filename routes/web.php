<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('/posts')->name('post.')->controller(PostController::class)->group(function(){

    //Ruta para mostrar el listado de registros
    Route::get('/', 'index')->name('index');

    //Ruta para mostrar un formulario para crear un registro
    Route::get('/create', 'create')->name('create');

    //Ruta para guardar un registro
    Route::post('/', 'store')->name('store');

    //Ruta para mostrar un registro
    Route::get('/{post}', 'show')->name('show');

    //Ruta para mostrar un formulario para editar un registro 
    Route::get('/{post}/edit', 'edit')->name('edit');
    //Ruta para actualizar un registro

    Route::put('/{post}', 'update')->name('update');

    //Ruta para eliminar un registro
    Route::delete('/{post}', 'destroy')->name('destroy');

});
// Route::resource('articulos', PostController::class)
//     ->parameters(['articulos' => 'post'])    
//     ->names('posts');