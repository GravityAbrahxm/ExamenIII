<?php


use App\Http\Livewire\Tareas;
use App\Http\Livewire\Contador;
use App\Http\Livewire\Empresas;
use App\Http\Livewire\UsersIndex;
use App\Http\Livewire\AsignarTarea;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [ViewsController::class, 'LoginView']);
Route::get('/Usuario', [UsuarioController::class, 'Index']);




Route::get('/asset', [AssetController::class, 'index']);
Route::get('/contador',Contador::class);
Route::get('/UsuariosIndex',UsersIndex::class);
Route::get('/EmpresaIndex',Empresas::class);
Route::get('/TareasIndex',Tareas::class);
Route::get('/TareaAsignadaIndex',AsignarTarea::class);
