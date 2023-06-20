<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP | Beranda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
           
            background-color: #E0ECE4;
            font-family: Verdana;
        }
    </style>
</head>
<body>
  @extends('template2')
  @section('content')
    {{-- <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3A4750">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sneaker Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
        </ul>
        <div>
          <form class="d-flex">
            <button type="button" class="btn btn-outline-light" id="btn-cart">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              <i class="bi-cart-fill me-1"></i>Cart
              <span class="badge bg-light text-primary ms-1 rounded-pill">0</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <!--Akhir Navbar--> --}}

  <!--Home-->
 {{-- <section id="home" class="py-3 mt-5">
  <div class="container px-4 px-lg-5">
        <img src="img/shopppp.png" alt=""  class="d-block rounded">
  </div>
</section>  --}}
<!--Akhir Home-->

<!--Shop-->
<section class="shop" class="py-3 mt-4 pt-4" >
  <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-colls-md-3 row-cols-xl-4 justify-content-center">
      @foreach($product as $item)
        <div class="col mb-5">
          <div class="card h-100" style="width: 14rem;">
            <img src="/storage/{{ $item->foto }}" class="card-img-top" alt="...">
              <div class="card-body p-4 text-center">
                <h5 class="card-title">{{ $item->nama }}</h5>
                  <p class="card-text">Rp.{{ number_format ($item->harga) }}</p>
                  <a href="product/detail/{{ $item->id}}" class="btn text-white" style="background-color: #718893">View Options</a>
              </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!--akhir shop-->
@endsection
</body>
</html>