<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function post(Post $post)
    {
        // recording view
        views($post)->record();
        return view('detail-post', compact('post'));
    }
}
