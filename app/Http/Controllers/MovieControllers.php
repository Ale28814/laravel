<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * MOVIE
     */
    public function index()
    {
        //* Get all mouvies
        $movies = Movie::all();

        return view('home-page', compact('movies'));
    }
}