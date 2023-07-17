<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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


Route :: get("/", [MainController :: class, "index"])
    -> name('comic.index');
    
Route :: get('/comic/create', [MainController :: class, 'create'])
    -> name('comic.create');

Route :: post('/pastas', [MainController :: class, 'store'])
    -> name('pastas.store');

Route :: get("/comic/{id}", [MainController :: class, "show"])
    -> name('comic.show');

