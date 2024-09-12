@extends('layouts.app')

@section('content')
<div class="flex bg-white p-2 rounded shadow">
  <form action="{{ route('customers.index') }}" method="GET">
    @csrf

    <div class="mb-4">
      <input id="never-borrowed" type="checkbox" value="1" name="more_than_10_times_borrowed" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="never-borrowed" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">customers who have borrowed more than 10 times</label>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Filter</button>

  </form>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          No
        </th>
        <th scope="col" class="px-6 py-3">
          Identity Card Number
        </th>
        <th scope="col" class="px-6 py-3">
          Full Name
        </th>
        <th scope="col" class="px-6 py-3">
          Address
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($customers as $index => $customer)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        <td class="px-6 py-4">
          {{ $index + 1 }}
        </td>
        <td class="px-6 py-4">
          {{ $customer->identity_card_number }}
        </td>
        <td class="px-6 py-4">
          {{ $customer->name }}
        </td>
        <td class="px-6 py-4">
          {{ $customer->address }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection