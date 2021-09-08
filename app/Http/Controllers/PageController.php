<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM : 2031710106, Nama : Muhammad Zaki';
    }

    public function articles($articles){
        return "Halaman artikel dengan id ". $articles;
    }
}
