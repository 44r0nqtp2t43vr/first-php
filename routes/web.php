<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome-storefront');
});

Route::get('/store/history/about', function() {
    return view('storefront-history');
})->name('about');

Route::get('/students/entry', [StudentInfoController::class, "studentEntry"]);

Route::post('/students/entry/save', [StudentInfoController::class, "getStudentData"])->name('save');

Route::get('/students/list', [StudentInfoController::class, "listData"]);
