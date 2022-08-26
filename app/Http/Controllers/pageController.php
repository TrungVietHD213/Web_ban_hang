<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getIndex(){
        return view('page.trangchu');
    }
    public function getLogin(){
        return view('auth.login');
    }
}
