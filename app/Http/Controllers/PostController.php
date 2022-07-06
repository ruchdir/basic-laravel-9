<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($postId){
        $post = Post::find($postId);

        return view('post', compact('post'));
    }
}
