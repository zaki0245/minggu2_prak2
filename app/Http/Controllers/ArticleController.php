<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($articles){
        return "Halaman artikel dengan id ". $articles;
    }
}
