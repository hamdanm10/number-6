<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/0b0d7f0544.js" crossorigin="anonymous"></script>

  <title>Book Rental System</title>
</head>

<body class="bg-gray-100">
  @include('partials/navbar')
  @include('partials/sidebar')

  <div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
      @yield('content')
    </div>
  </div>
</body>

</html>