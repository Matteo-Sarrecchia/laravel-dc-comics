<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;


Route :: get("/", [MainController :: class, "index"])
    -> name('comic.index');
    
Route :: get('/comic/create', [MainController :: class, 'create'])
    -> name('comic.create');

Route :: post('/pastas', [MainController :: class, 'store'])
    -> name('pastas.store');

Route :: get("/comic/{id}", [MainController :: class, "show"])
    -> name('comic.show');

Route :: get('/edit/{id}', [MainController :: class, "edit"])
    -> name('edit');

Route :: put('/update/{id}', [MainController :: class, "update"])
    -> name('update');