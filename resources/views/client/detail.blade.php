@extends('layouts.client')
@section('content')
   <div class="container">
      <header class="row align-items-center mb-5 mt-3">
         <div class="col-4 d-flex">
            <a href="{{ route('home') }}" class="text-black"><i class="bi bi-arrow-left fs-3"></i></a>
         </div>
         <div class="col-4 d-flex justify-content-center text-center">
            <h3 class="mb-0" style="white-space: nowrap">Nama Resto</h3>
         </div>
         <div class="col-4 text-end">
            <i class="bi bi-cart fs-3"></i>
         </div>
      </header>
   </div>
   <img
      class="img-fluid"
      src="https://blog.bankmega.com/wp-content/uploads/2022/10/Makanan-tradisional-indonesia.jpg"
      alt=""
   >
   <div class="container mt-3">
      <h3>Lontong Balap</h3>
      <h3 class="fw-bold">Rp. 10.000</h3>
      <h6 class="mt-4 mb-1">deskripsi :</h6>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati id iusto praesentium enim culpa veritatis, fugit
         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex atque deserunt perferendis cum itaque quo non enim magnam
         aperiam ut, provident dolore saepe quia architecto dolores nostrum maiores, cumque tenetur eligendi ratione! Voluptatum
         dolorem consequatur, aliquid quidem porro recusandae at quisquam. Sed qui tenetur obcaecati repellat cumque error adipisci
         fugiat neque aliquid fugit! Quam qui magni minus eum nulla dignissimos tempore amet ducimus aperiam dolores deserunt, vero
         quasi voluptate a eveniet repudiandae ratione sint maxime corporis? Architecto sed enim unde quo, provident rerum laborum.
         Provident optio aut sunt laborum vitae eligendi nemo natus eaque, facilis nam, alias, voluptatibus dignissimos accusantium.
         repudiandae, incidunt hic amet a non! Assumenda, fugiat quasi dicta exercitationem amet aspernatur totam!</p>
   </div>

   <div class="fixed-bottom gap-3 bg-white container d-flex align-items-center justify-content-between py-3"
      style="box-shadow: 0 -3px 15px #8080804f"
   >
      <div class="input-group">
         <span class="input-group-text">-</span>
         <input
            type="text"
            class="form-control"
            aria-label="Amount (to the nearest dollar)"
         >
         <span class="input-group-text">+</span>
      </div>
      <button class="btn btn-primary" style="height: fit-content">Update</button>
   </div>
@endsection
