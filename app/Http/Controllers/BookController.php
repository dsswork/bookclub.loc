<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function myBooks()
    {
        $user = User::find(Auth::id());
        return view('books.show', compact('user'));
    }

    public function usersBooks(Request $request)
    {
        $user = User::find($request->user_id);
        return view('books.show', compact('user'));
    }

    public function add()
    {
        return view('books.add');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required'
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('books.myBooks');
    }

}
