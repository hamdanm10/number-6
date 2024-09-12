<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->has('never_borrowed')) {
            $query->whereDoesntHave('rents');
        }

        if ($request->has('price_range')) {
            $query->whereBetween('price_rent', [2000, 6000]);
        }

        $books = $query->get();

        return view('books.index', compact('books'));
    }
}
