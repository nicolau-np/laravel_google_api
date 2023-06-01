<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function news(){
        $response = null;
            try{
                $response = Http::get('https://dicionario.empregofacilitado.com/api/textos')->json();
            }catch(\Exception $ex){
                return $ex->getMessage();
            }
        return view('news', compact('response'));
    }

    public function videos(){
        dd("videos");
    }
}
