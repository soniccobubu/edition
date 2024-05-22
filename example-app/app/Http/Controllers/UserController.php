<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $page = 'home';
        return view('index',
        [
            'page' => $page
        ]

        );
    }

    //
}
