<?php

use App\Http\Controllers\ReceiptController;
use App\Models\Receipt;
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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/indexadmin', function () {
    return view('indexadmin');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about2', function () {
    return view('about2');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/order', function () {
    return view('order');
});

Route::view('/order2', 'order2');

Route::post('order2', [ReceiptController::class, 'addReceipt' ]);	

Route::get('/pendingorders', function () {
    return view('pendingorders');
});

Route::get('/saleslist', function () {
    return view('saleslist');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
 
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('adminDashboard');
 
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
