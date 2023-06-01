<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function news(){
        $palavras = null;
            try{
                $palavras = Http::get('https://dicionario.empregofacilitado.com/api/textos')->json();
            }catch(\Exception $ex){
                return $ex->getMessage();
            }
        return view('news', compact('palavras'));
    }

    public function videos(){
        dd("videos");
    }
}
