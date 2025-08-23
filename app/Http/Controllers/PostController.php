<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function create(){
        return view('posts.create');
    }
    
    public function store(){
        return "Aquí se procesará el formulario para crear un post";
    }

    public function show($post){
        return view('posts.show');
    }

    public function edit($post){
        return view('posts.edit');
    }

    public function update($post){
        return "Aquí se procesará el formulario para actualizar el post: $post";
    }

    public function destroy($post){
        return "Aquí se eliminará el post: $post";
    }
}
