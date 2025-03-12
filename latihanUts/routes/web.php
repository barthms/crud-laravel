<?php

// Route::get('/', function () {
//     return view('welcome');
// });
use illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductionController;


// Route::get('/products', function(){
//     return view('products.index');
// });

// Route::resource('products', ProductionController::class); //Versi global
Route::get('/', [ProductionController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductionController::class, 'create'])->name('products.create');
Route::post('/products', [ProductionController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductionController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductionController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductionController::class, 'destroy'])->name('products.destroy');
// Route::get('/products/destroy',[ProductionController::class, 'edit'])->name('products.destroy');