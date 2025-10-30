<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function course() {
        return view('course');
    }

    public function contact() {
        return view('contact');
    }

    public function blog() {
        return view('blog');
    }
}
