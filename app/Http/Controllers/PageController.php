<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() 
    {
        return view('pages.home');
    }
    public function students() 
    {
        return view('pages.students');
    }
    public function add() 
    {
        return view('pages.add');
    }

}