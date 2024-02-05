<?php

use App\Http\Controllers\GuestbookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/guestbook', [GuestbookController::class, 'index'])->name('index');
Route::post('/guestbook', [GuestbookController::class, 'create'])->name('create.guestbook');
