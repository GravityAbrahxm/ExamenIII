<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductosController extends Controller
{
    public function Productos(){
        $response = Http::get('http://localhost:8000/api/Tienda/');
        $responseTOJson = $response->json();
        dd($responseTOJson);
        return view('productos',compact('productos'));
    }
}



