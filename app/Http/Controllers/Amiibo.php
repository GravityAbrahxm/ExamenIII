<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Amiibo extends Controller
{
    public function AmiiboGET(){
        $response = Http::get('https://amiiboapi.com/api/amiibo/');
        $responseTOJson = $response->json();
        return view('amiibo');
    }
}
