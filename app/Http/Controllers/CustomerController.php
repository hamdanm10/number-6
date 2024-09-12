<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $query = Customer::query()
            ->select('customers.id', 'customers.name', 'customers.identity_card_number', 'customers.address')
            ->leftJoin('rents', 'customers.id', '=', 'rents.customer_id')
            ->selectRaw('COUNT(rents.id) as books_borrowed')
            ->groupBy('customers.id', 'customers.name', 'customers.identity_card_number', 'customers.address');

        if ($request->has('more_than_10_times_borrowed')) {
            $query->having('books_borrowed', '>', 10);
        }

        $customers = $query->get();

        return view('customers.index', compact('customers'));
    }
}
