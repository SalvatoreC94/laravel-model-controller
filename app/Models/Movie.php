<?php

   namespace App\Models;

   use Illuminate\Database\Eloquent\Model;

   class Movie extends Model
   {
       // Definisce la tabella collegata al model
       protected $table = 'movies';

       // Indica quali colonne possono essere riempite
       protected $fillable = ['title', 'original_title', 'nationality', 'date', 'vote'];
   }
