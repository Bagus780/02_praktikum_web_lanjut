<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function artikel($id){
        echo "Halaman Artikel dengan" .$id; 
    }
}
