<?php

namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

use PlatziPHP\Http\Requests;
use PlatziPHP\Http\Controllers\Controller;
use PlatziPHP\Post;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function index()
    {
        $posts = Post::with('user')->get();

        return view('home', ['posts' => $posts]);
    }
}
