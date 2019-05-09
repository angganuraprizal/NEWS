<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Kategori;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $artikels = Artikel::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', compact('artikels'));
    }

    public function blog()
    {
        $artikels = Artikel::orderBy('created_at','DESC')->paginate(9);
        return view('blog', compact('artikels'));
    }

    public function detail($slug)
    {
        $artikels = Artikel::where('slug', $slug)->first();
        $blogs = Artikel::orderBy('created_at', 'desc')->take(4)->get();
        // $previous = Artikel::where('id', '<', $artikels->slug)->orderBy('id', 'desc')->first();
        // $next = Artikel::where('id', '>', $artikels->slug)->orderBy('id')->first();
    
        return view('singleblog',compact('artikels', 'blogs'));
    }
}
