<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MlController;

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

Route::get('/', [MlController::class ,'index'])-> name('index');

Route::get('/salesInsight', [MlController::class ,'salesInsight'])-> name('salesInsight');

Route::get('/predict', [MlController::class ,'predict'])-> name('predict');

Route::get('ajax',function() {
    return view('message');
 });
 Route::post('/getmsg',[MlController::class ,'']);