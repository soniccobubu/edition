<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContacts extends Controller
{
    public function index()
    {

        $page = 'contacts';
        return view('index',
            [
                'page' => $page
            ]

        );
    }
    //
}
