<?php

use App\Helpers\ApiWatsap;
use App\Http\Livewire\Public\PublicBeranda;
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

// Route::get('send', function () {
//     return ApiWatsap::send('089660741134', 'test woi');
// });

Route::get('/', PublicBeranda::class);
