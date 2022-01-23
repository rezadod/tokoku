<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        return view('welcome.welcome');
    }

    public function view_product(){
        return view('welcome.view_product');
    }
}
