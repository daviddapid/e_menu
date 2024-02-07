<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>E-Menu</title>

   <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

   <style>
      .card {
         border-radius: 15px;
         overflow: hidden;
         box-shadow: 0 5px 9px #8080804a !important;
      }
   </style>
   @stack('heads')
</head>

<body>

   @yield('content')

   <script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   @stack('scripts')
</body>

</html>
