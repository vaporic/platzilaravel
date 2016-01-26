<?php

namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use PlatziPHP\Http\Requests;
use PlatziPHP\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('auth');
    }

    /**
     * @param Request $request
     * @return $this|string
     */
    public  function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!Auth::attempt($request->only(['email','password'])))
        {
            return redirect()->route('auth_show_path')->withErrors(['No encontramos al usuario']);
        }

        return 'Listo';
    }
}
