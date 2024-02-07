@props(['name', 'desc', 'price', 'img'])

<a class="card shadow-sm text-decoration-none" href="{{ route('detail', $name) }}">
   <img
      src="{{ $img }}"
      class="card-img-top"
      alt=""
   >
   <div class="card-body" id="">
      <h3>{{ $name }}</h3>
      <p>{{ $desc }}...</p>
      <h3>Rp. {{ number_format($price) }}</h3>
   </div>
   {{-- <div class="card-footer">
      <button class="btn btn-info">Detail</button>
      <button class="btn btn-primary">Add</button>
   </div> --}}
</a>
