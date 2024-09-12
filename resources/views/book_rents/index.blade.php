@extends('layouts.app')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          No
        </th>
        <th scope="col" class="px-6 py-3">
          Book Name
        </th>
        <th scope="col" class="px-6 py-3">
          Customer Name
        </th>
        <th scope="col" class="px-6 py-3">
          Price
        </th>
        <th scope="col" class="px-6 py-3">
          Rental Date
        </th>
        <th scope="col" class="px-6 py-3">
          Return Date
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rents as $index => $rent)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        <td class="px-6 py-4">
          {{ $index + 1 }}
        </td>
        <td class="px-6 py-4">
          {{ $rent->book->title }}
        </td>
        <td class="px-6 py-4">
          {{ $rent->customer->name }}
        </td>
        <td class="px-6 py-4">
          Rp. {{ $rent->book->price_rent }}
        </td>
        <td class="px-6 py-4">
          {{ $rent->date_rent }}
        </td>
        <td class="px-6 py-4">
          {{ $rent->date_return }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection