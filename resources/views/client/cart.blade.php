@extends('layouts.client')
@section('content')
   <div class="container">
      <header class="row align-items-center mb-5 mt-3">
         <div class="col-4 d-flex ">
            <i class="bi bi-list fs-3"></i>
         </div>
         <div class="col-4 d-flex justify-content-center text-center">
            <h3 class="mb-0" style="white-space: nowrap">Nama Resto</h3>
         </div>
         <div class="col-4 text-end">
            <a href="{{ route('cart') }}" class="text-black"><i class="bi bi-cart fs-3"></i></a>
         </div>
      </header>
   </div>
   <main class="container">
      <x-client.CardCart />
      <x-client.CardCart />
      <x-client.CardCart />
   </main>
@endsection
