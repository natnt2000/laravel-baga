<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel";
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About Us';
        $categories = ['hi', 'he', 'ha'];
        return view('pages.about', compact('title', 'categories'));
    }
}
