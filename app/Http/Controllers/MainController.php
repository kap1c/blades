<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view()->first([
            $request->theme,
            'classic'
        ],['theme' => $request->theme]);
    }

    public function contacts(Request $request)
    {

        return view()->first([
            'contacts_'.$request->theme,
            'contacts',
        ]);
    }
}
