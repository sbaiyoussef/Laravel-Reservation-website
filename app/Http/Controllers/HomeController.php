<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function resto(){
        return view('restaurant');
    }
    public function rooms(){
        return view('rooms');
    }
    public function roomSingle(){
        return view('room-single');
    }
    public function blogSingle(){
        return view('blog-single');
    }
    public function contact(){
        return view('contact');
    }
    public function reserve(){
        return view('reserve');
    }
}
