<?php

use App\Http\Controllers\InventaireCtrl;
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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [InventaireCtrl::class, 'home']);

Route::get('/emplacements', [InventaireCtrl::class, 'emplacements']);

Route::get('/ajouter', [InventaireCtrl::class, 'ajouter']);


