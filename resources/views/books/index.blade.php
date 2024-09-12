@extends('layouts.app')

@section('content')

<div class="flex bg-white p-2 rounded shadow">
  <form action="{{ route('books.index') }}" method="GET">
    @csrf

    <div class="mb-1">
      <input id="never-borrowed" type="checkbox" value="1" name="never_borrowed" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="never-borrowed" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Books that have never been borrowed</label>
    </div>
    <div class="mb-4">
      <input id="price-range" type="checkbox" value="1" name="price_range" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="price-range" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Books with a loan price of more than Rp. 2,000 and less than Rp. 6,000.</label>
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
          Book Name
        </th>
        <th scope="col" class="px-6 py-3">
          Author
        </th>
        <th scope="col" class="px-6 py-3">
          Category
        </th>
        <th scope="col" class="px-6 py-3">
          Price
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $index => $book)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        <td class="px-6 py-4">
          {{ $index + 1 }}
        </td>
        <td class="px-6 py-4">
          {{ $book->title }}
        </td>
        <td class="px-6 py-4">
          {{ $book->author }}
        </td>
        <td class="px-6 py-4">
          {{ $book->book_category }}
        </td>
        <td class="px-6 py-4">
          Rp. {{ $book->price_rent }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection