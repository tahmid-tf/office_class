<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Book;
use Illuminate\Support\Facades\Auth;

// -------------------- table practice --------------------

Route::get('/', function () {
//    $books = Book::all();
//    return view('user.home', ['books' => $books]);
    return view('user.user_view');
});

//Route::get('/delete/{id}', function ($id){
//    $book = Book::find($id);
//    $book->delete();
//    return redirect()->back();
//})->name('delete.data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ------------------------------- Crud -----------------------------------

Route::get('index', 'BookController@index')->name('book.index');
Route::get('create', "BookController@create");
Route::post('store',"BookController@store")->name('book.store');
