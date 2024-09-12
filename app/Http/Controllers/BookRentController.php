<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class BookRentController extends Controller
{
    public function index()
    {
        $rents = Rent::with('customer', 'book')->get();

        return view('book_rents.index', compact('rents'));
    }
}
