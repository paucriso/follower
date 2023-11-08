<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function photography() {
        return view('pages.photography-video');
    }

    public function social() {
        return view('pages.social-media-management');
    }

    public function graphic() {
        return view('pages.graphic-design');
    }

    public function web() {
        return view('pages.web-design');
    }
}


