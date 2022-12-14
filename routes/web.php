<?php

use App\Http\Controllers\TodoController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/',[TodoController::class,'index']);
Route::post('/todo',[TodoController::class,'store'])->name('add.todo');
Route::put('/todo/{id}',[TodoController::class,'update'])->name('update.todo');
Route::delete('/todo/{id}',[TodoController::class,'destroy'])->name('destroy.todo');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
