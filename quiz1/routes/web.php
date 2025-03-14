<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

Route::get('/inventory', [InventoryController::class, 'index']);

Route::get('hello/{name}', function($name) {

    return 'hello ' . $name; 

});
