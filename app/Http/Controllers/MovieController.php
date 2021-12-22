<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $data = Movie::all();

        return view('movie', [
            "listMovies" => $data,
        ]);
    }
}
