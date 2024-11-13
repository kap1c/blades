<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $theme = $request->theme !== null ? $request->theme : 'classic';

        return view($theme, ['theme' => $theme]);
    }

    public function contacts(Request $request)
    {

        return view('contacts');
    }
}
