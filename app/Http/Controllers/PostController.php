<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts')); //ruta je sada promenjena u resources/views/cars/index.blade.php
    } // prikazuje celu tabelu cars

    public function show($id) { // prosledjuje id trazenog reda
        $post = Post::find($id); // pronalazi red sa trazenim id iz tabele cars
        return view('posts.show', compact('post'));
    } // prikazuje jedan odredjen red iz tabele cars preko url /cars/id

    public function create() {
        return view('posts/create');
    }
}
