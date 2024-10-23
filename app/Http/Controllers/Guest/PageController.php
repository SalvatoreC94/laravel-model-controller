<?php

   namespace App\Http\Controllers\Guest;

   use App\Http\Controllers\Controller;
   use App\Models\Movie;

   class PageController extends Controller
   {
       public function index()
       {
           $movies = Movie::all(); // Recupera tutti i film dal database
           return view('movies.index', compact('movies')); // Passa i film alla view
       }
   }
