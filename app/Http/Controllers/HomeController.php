<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class HomeController extends Controller
{
    function index() {

        $myMovies=Movie::all();

        return view('movies', compact("myMovies"));
}}
