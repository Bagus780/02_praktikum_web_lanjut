<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerProducts;


Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "2041720093";
    echo "Mochamad Aditya Bagus";
    echo "2H";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID $id";
});

Route::get('/category1', function () {
    echo "category 1";
});

route::get('/index',[HomeController::class, 'index']);
route::get('/about',[PageController::class, 'about']);
route::get('/articles($id)',[PageController::class, 'articles/{id}']);
route::get('/index',[ControllerProducts::class, 'category1']);