<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $query = "Angola";
        try{
            $news = Http::get('https://newsapi.org/v2/everything?q='.$query.'&language=pt&pageSize=10&apiKey='.env('GOOGLE_NEWS_API_KEY').'')->json();

        }catch(\Exception $ex){
            return $ex->getMessage();
        }
        return view('news.index', compact('news'));
    }

    public function show($id){
return view('news.show');
    }
}
