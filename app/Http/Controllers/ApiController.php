<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function news(){

        return view('news');
    }

    public function index(){
        $query="dicas para albinos";
        try{
            $videos = Http::get('https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=10&q='.$query.'&key='.env('YOUTUBE_DATA_API_KEY').'');
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
        return view('videos.index', compact('videos'));
    }

    public function show($id){

        return view('videos.show', compact('id'));
    }
}
