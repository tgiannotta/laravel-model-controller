<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'nome' => 'Tommaso',
            'cognome' => 'Giannotta'
        ];
        return view('home', $data);
    }
    public function movies(){

        $movies = Movie::all();
        $data =[
            'movies' => $movies
        ];


      
        return view('movies', $data);
    }

}
