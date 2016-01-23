<?php

namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

use PlatziPHP\Http\Requests;
use PlatziPHP\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function index()
    {
        return view('home');
    }
}
