<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('crud.index',compact('books'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store()
    {

        $inputs = \request()->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }

        Book::create($inputs);
        return back();


    }
}
