<?php

namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

use PlatziPHP\Http\Requests;
use PlatziPHP\Http\Controllers\Controller;
use PlatziPHP\Post;

class PostsController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post', ['post' => $post]);
    }
}