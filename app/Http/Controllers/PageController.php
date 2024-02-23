<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // consulta a la base de datos
        // $posts = Post::get(); // Trae todos los registros de la base de datos
        // $post = Post::first(); // Trae el primer registro de la base de datos
        // $post = Post::find(25);
        
        $posts = Post::latest()->paginate();

        // dd($posts);

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        // consulta a la base de datos
        return view('post', ['post' => $post]);
    }
}
