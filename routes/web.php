<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return Inertia::render('Test', [
        'title' => 'Test 1'
    ]);
});
Route::get('/test2', function () {
    return Inertia::render('Test2');
});
Route::get('/test3', function () {
    return Inertia::render('Test3');
});

Route::resource('students', StudentController::class);
