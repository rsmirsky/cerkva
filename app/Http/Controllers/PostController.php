<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      /*  $holidays = [];
        $posts = Post::all();
        foreach ($posts as $post){
            $holidays[] = [
                'title' => $post->title,
            ];
        }*/
        $posts = Post::all();

        return inertia('Posts/Index', compact('posts'));
    }
}
