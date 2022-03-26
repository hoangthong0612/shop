<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\{adminController, categoryController, postController};
use App\Http\Controllers\admin\auth\{loginController};

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


// Route::namespace('Admin')->prefix('admin')->name('admin')->group(function () {
//      Route::get('dashboard', 'adminController@dashboard')->name('dashboard');
// });


Route::prefix('admin')->name('admin.')->group(function (){
     Route::namespace('Auth')->group(function () {
        Route::get('/', [loginController::class, 'showLoginForm'])->name('login');
        Route::post('/', [loginController::class, 'login'])->name('login');
        Route::get('logout', [loginController::class, 'logout'])->name('logout');
        
    });
    Route::middleware(['admin'])->group(function () {
        Route::get('/Dashboard', [adminController::class, 'dashboard'])->name('dashboard');

        Route::name('category.')->prefix('category')->group(function () {
            Route::get('/', [categoryController::class, 'index'])->name('index');
            Route::post('/store', [categoryController::class, 'store'])->name('store');
            Route::get('/status/change/{id}', [categoryController::class ,'changeStatus'])->name('status.change');
            Route::post('/update/{id}', [categoryController::class ,'update'])->name('update');
            
        });
        Route::name('posts.')->prefix('posts')->group(function () {
            Route::get('/', [postController::class, 'index'])->name('index');
            Route::post('/store', [postController::class, 'store'])->name('store');
            Route::get('/status/change/{id}', [postController::class ,'changeStatus'])->name('status.change');
            Route::post('/update/{id}', [postController::class ,'update'])->name('update');
            
        });

        Route::get('/Seo', function(){

        })->name('seo');
    });
    
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
