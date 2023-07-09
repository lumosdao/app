<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AppController extends Controller
{
    public function home()
    {
        $view = Route::currentRouteName()=='explore' ? 'index' : 'guest';
        return view($view);
    }
}
