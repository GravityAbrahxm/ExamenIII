<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function LoginView(){
        return view('login');
    }

}
