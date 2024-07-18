<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\movies;

class PageController extends Controller
{
    //
    public function index(){

        $movies = movies::all();
        return view('pages.home', compact('movies'));
    }
}
