<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;

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

Route::get('list',[DepartmentsController::class,'show']);
Route::get('departmentslist',[DepartmentsController::class,'show'])->middleware(['auth'])->name('departmentslist');

Route::post('employeesbydepartment', [DepartmentsController::class,'create'])->middleware(['auth'])->name('employeesbydepartment');


// Route::get('/blog',[PostsController::class, 'index']);
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{id}', [PostsController::class, 'show']);

// Route::get('/blog/{id}', [PostsController::class, 'show'])->whereNumber('id');
// Route::get('/blog/{name}', [PostsController::class, 'show'])->where('name', '[A-Za-z]+');
// Route::get('/blog/{name}', [PostsController::class, 'show'])->whereAlpha('name');


// Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
// ->where([
//     'id'=>'[0-9]+',
//     'name'=>'[A-Za-z]+'
// ]);


Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
->whereNumber('id')
->whereAlpha('name');


//Route for invoke method
Route::get('/blog',HomeController::class);

Route::get('/', function () {
    return view('welcome');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
