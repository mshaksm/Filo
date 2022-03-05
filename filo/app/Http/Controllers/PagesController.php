<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Filo!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function nad(){
        return view('pages.test');
    }

}
