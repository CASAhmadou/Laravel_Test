<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function adminGetOfms()
   {
       if(Auth::user()->hasRole('admin')){
           return view('admin.ofms');
       }elseif(Auth::user()->hasRole('stagiaire')){
           return view('stage.stagiaire');
       }
   }
}
