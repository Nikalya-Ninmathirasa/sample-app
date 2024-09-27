<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about(){
        if(true){
            //return '<h1>Hello</h1>';
            return redirect()->route('article');
        }
        return '<h1>You are not welcome</h1>';
    }
    //
}
