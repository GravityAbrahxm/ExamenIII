<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UsersIndex extends Component

{

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/Usuarios');
        $usuarios = $response->json();
        return view('livewire.users-index', compact('usuarios'));
    }
}
