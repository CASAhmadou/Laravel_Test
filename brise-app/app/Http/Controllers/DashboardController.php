<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('userpage');
        }elseif(Auth::user()->hasRole('blogwritter')){
            return view('blogpage');
        }elseif(Auth::user()->hasRole('admin')){
            return view('dashboard');
        }
    }
}
