<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.welcome');

    // public function index(){
        // $articles=[
        //     [
        //         'title'=>'mon premier',
        //         'contenue'=>'bonjour'
        //     ],
        //     [
        //         'title'=>'reponse',
        //         'contenue'=>'tu vas bien'
        //     ],
        // ];
        // return view('home',[
        //     'articles'=>'$articles'
        // ]);
    }
}
