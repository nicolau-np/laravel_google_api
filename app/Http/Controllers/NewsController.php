<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
return view('news.index');
    }

    public function show($id){
return view('news.show');
    }
}
