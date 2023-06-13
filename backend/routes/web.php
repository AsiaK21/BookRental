<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\OpenController;
use App\Http\Controllers\XMLController;
use App\Http\Controllers\JSONController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/index', [BooksController::class, 'index']);
Route::get('/books/test', [BooksController::class, 'test']);

Route::get('/open', [OpenController::class, 'index']);

Route::get('/XML/getBooks', [XMLController::class, 'getBooks']);

Route::post('/XML/addBooks', [XMLController::class, 'addBooks']);

Route::get('/JSON/getBooks', [JSONController::class, 'getBooks']);

Route::post('/JSON/addBooks', [JSONController::class, 'addBooks']);

Route::get('/DB/getAllBooks', [DatabaseController::class, 'getAllBooks']);

Route::post('/USERS/login', [UsersController::class, 'login']);

Route::post('/USERS/register', [UsersController::class, 'register']);

Route::post('/Cart/addBookToCart', [CartController::class, 'addBookToCart']);

Route::get('/Cart/getBooksFromCart', [CartController::class, 'getBooksFromCart']);

Route::post('/Cart/removeBooksById', [CartController::class, 'removeBooksById']);

Route::post('/Cart/removeAllTestEmailBooks', [CartController::class, 'removeAllTestEmailBooks']);