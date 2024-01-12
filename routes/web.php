<?php
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/song', [App\Http\Controllers\SongController::class, 'index'])->name('song.index');

Route::get('/song/create', [App\Http\Controllers\SongController::class, 'create'])->name('song.create');

Route::post('/song/store', [App\Http\Controllers\SongController::class, 'store'])->name('song.store');

Route::get('/song/{song}/show', [App\Http\Controllers\SongController::class, 'show'])->name('song.show');

Route::get('/song/{song}/edit', [App\Http\Controllers\SongController::class, 'edit'])->name('song.edit');

Route::put('/song/{song}/update', [App\Http\Controllers\SongController::class, 'update'])->name('song.update');

Route::delete('/song/{song}/destroy', [App\Http\Controllers\SongController::class, 'destroy'])->name('song.destroy');

