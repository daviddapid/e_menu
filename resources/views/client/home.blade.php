@extends('layouts.client')
@section('content')
   {{-- <div class="container"> --}}

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



   <main>
      <div class="mb-5">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-md-6">
                  <h3 class="mb-0">Makanan</h3>
               </div>
               <div class="col-md-5 col-lg-3">
                  {{-- searchbar --}}
                  <div class="input-group mb-3">
                     <input
                        type="text"
                        class="form-control"
                        placeholder="Cari Nama Makanan..."
                        aria-label="Recipient's username"
                        aria-describedby="basic-addon2"
                     >
                     <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                  </div>
                  {{-- endsearchbar --}}
               </div>
            </div>
         </div>
         <!-- Slider main container -->
         <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper p-3">
               <!-- Slides -->
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://blog.bankmega.com/wp-content/uploads/2022/10/Makanan-tradisional-indonesia.jpg'"
                     :name="'lontong balap'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="19000"
                  />
               </div>
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://blog.bankmega.com/wp-content/uploads/2022/10/Makanan-tradisional-indonesia.jpg'"
                     :name="'lontong balap'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="19000"
                  />
               </div>
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://blog.bankmega.com/wp-content/uploads/2022/10/Makanan-tradisional-indonesia.jpg'"
                     :name="'lontong balap'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="19000"
                  />
               </div>
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://blog.bankmega.com/wp-content/uploads/2022/10/Makanan-tradisional-indonesia.jpg'"
                     :name="'Cingur Dirujak'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="29000"
                  />
               </div>
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://blog.bankmega.com/wp-content/uploads/2022/10/Makanan-tradisional-indonesia.jpg'"
                     :name="'Tahu Tek'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="10000"
                  />
               </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

         </div>
      </div>

      <div class="mb-5">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-md-6">
                  <h3 class="mb-0">Minuman</h3>
               </div>
               <div class="col-md-5 col-lg-3">
                  {{-- searchbar --}}
                  <div class="input-group mb-3">
                     <input
                        type="text"
                        class="form-control"
                        placeholder="Cari Nama Minuman..."
                        aria-label="Recipient's username"
                        aria-describedby="basic-addon2"
                     >
                     <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                  </div>
                  {{-- endsearchbar --}}
               </div>
            </div>
         </div>
         <!-- Slider main container -->
         <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper p-3">
               <!-- Slides -->
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6bh1twyi1iKi4aFEh8kp7oCzgm1wlG62Izw&usqp=CAU'"
                     :name="'ES Teh'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="10000"
                  />
               </div>
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6bh1twyi1iKi4aFEh8kp7oCzgm1wlG62Izw&usqp=CAU'"
                     :name="'Es Jeruk'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="15000"
                  />
               </div>
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6bh1twyi1iKi4aFEh8kp7oCzgm1wlG62Izw&usqp=CAU'"
                     :name="'Cendol Dawet'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="20000"
                  />
               </div>
               <div class="swiper-slide">
                  <x-client.CardProduct
                     :img="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6bh1twyi1iKi4aFEh8kp7oCzgm1wlG62Izw&usqp=CAU'"
                     :name="'Cendol Dawet'"
                     :desc="'Lorem, ipsum dolor sit amet consectetur.'"
                     :price="20000"
                  />
               </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

         </div>
      </div>
   </main>
   {{-- </div> --}}
@endsection

@push('scripts')
   <script>
      const swiper = new Swiper('.swiper', {
         speed: 400,
         slidesPerView: 1.3,
         spaceBetween: 8,
         breakpoints: {
            505: {
               slidesPerView: 2.5,
               spaceBetween: 8
            },
            768: {
               slidesPerView: 2.5,
               spaceBetween: 20
            },
            1024: {
               slidesPerView: 3.5,
               spaceBetween: 20
            }
         }
      });
   </script>
@endpush
