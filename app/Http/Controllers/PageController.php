<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   

    public function about(){
        echo "Mochamad Aditya Bagus 2041720093";
    }

    public function articles($id){
        echo "Halaman astikel dengan" .$id;
    }
}
