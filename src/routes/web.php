<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\ShopController;
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


Route::middleware('auth')->group(function () {
        Route::get('/', [ShopController::class, 'shop']);
    });
Route::get('/thanks', [ShopController::class, 'thanks']);
//Route::post('/search', [ShopController::class, 'search']);
Route::get('/my_page', [BookController::class, 'myPage']);
//Route::get('/save', [ShopController::class, ]);
Route::get('/detail/:{shopId}', [ShopDetailController::class, 'detail']);
//Route::get('');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
