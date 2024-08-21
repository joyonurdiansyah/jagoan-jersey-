    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;800&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif
        }

        body {
            background-color: bisque
        }

        .container {
            margin: 30px auto
        }

        .navbar-nav .nav-link {
            color: #000 !important;
            padding: 0.5rem 0rem !important;
            border-color: transparent;
            margin-left: 1.5rem;
            transition: none
        }

        .navbar .navbar-toggler:focus {
            box-shadow: none
        }

        .navbar-nav .nav-link.active,
        .border-red {
            border-bottom: 3px solid #b71c1c
        }

        .navbar-nav .nav-link:hover {
            border-bottom: 3px solid #b71c1c
        }

        .container .product-item {
            min-height: 450px;
            border: none;
            overflow: hidden;
            position: relative;
            border-radius: 0
        }

        .container .product-item .product {
            width: 100%;
            height: 350px;
            position: relative;
            overflow: hidden;
            cursor: pointer
        }

        .container .product-item .product img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .container .product-item .product .icons .icon {
            width: 40px;
            height: 40px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.6s ease;
            transform: rotate(180deg);
            cursor: pointer
        }

        .container .product-item .product .icons .icon:hover {
            background-color: #b71c1c;
            color: #fff
        }

        .container .product-item .product .icons .icon:nth-last-of-type(3) {
            transition-delay: 0.2s
        }

        .container .product-item .product .icons .icon:nth-last-of-type(2) {
            transition-delay: 0.15s
        }

        .container .product-item .product .icons .icon:nth-last-of-type(1) {
            transition-delay: 0.1s
        }

        .container .product-item:hover .product .icons .icon {
            transform: translateY(-60px)
        }

        .container .product-item .tag {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 500;
            position: absolute;
            top: 10px;
            left: 20px;
            padding: 0 0.4rem
        }

        .container .product-item .title {
            font-size: 0.95rem;
            letter-spacing: 0.5px
        }

        .container .product-item .fa-star {
            font-size: 0.65rem;
            color: goldenrod
        }

        .container .product-item .price {
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight: 600
        }

        .fw-800 {
            font-weight: 800
        }

        .bg-green {
            background-color: #208f20 !important;
            color: #fff
        }

        .bg-black {
            background-color: #1f1d1d;
            color: #fff
        }

        .bg-red {
            background-color: #bb3535;
            color: #fff
        }

        @media (max-width: 767.5px) {

            .navbar-nav .nav-link.active,
            .navbar-nav .nav-link:hover {
                background-color: #b71c1c;
                color: #fff !important
            }

            .pilih-liga img {
                max-height: 100px;
            }

            .navbar-nav .nav-link {
                border: 3px solid transparent;
                margin: 0.8rem 0;
                display: flex;
                border-radius: 10px;
                justify-content: center
            }
        }

        .banner img {
            width: 100%;
            border-radius: 15px;
        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- banner --}}
    <div class="container">
        <div class="banner">
            <img src="{{ url('assets/jersey/banner.png') }}" alt="banner">
        </div>

        {{-- pilih liga --}}
        <section class="pilih-liga">
            <div class="row mt-4">
                <h3><strong>Pilih Liga</strong></h3>
                @foreach ($ligas as $liga)
                <div class="col">
                    <a href="{{ route('products.liga',$liga->id) }}">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Best product --}}
        <section class="products mt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3><strong>Best Product</strong></h3>
                <a href="{{ route('products') }}" class="lihat-semua-produk">lihat semua produk</a>
            </div>            
            <div class="row mt-4">
                @foreach ($products as $product)
                <div class="col-md-3">
                        <div class="card-home">
                            <div class="blob"></div>
                            <div class="bg"></div>
                        <div class="card-body-home text-center" style="margin-top: 60px;">
                            <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h5><strong>{{ $product->nama }}</strong> </h5>
                                    <h5>Rp. {{ number_format($product->harga) }}</h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="#" class="learn-more mb-4">cek produk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>


        {{-- Best Product --}}
        {{-- <section class="product">
            <div class="row" style="margin-top: 50px;">
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img src="https://i.pinimg.com/564x/e9/1f/9a/e91f9a53cb38eab17d26624ad3aff646.jpg"
                            alt="Manchester City Home Jersey">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Manchester City Home Jersey</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> </div>
                    <div class="price">Rp 1,000,000</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img src="https://i.pinimg.com/564x/7a/72/ab/7a72ab513ac32d3c3423a0a0df4f828c.jpg"
                            alt="Chelsea Home Jersey">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Chelsea Home Jersey</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> </div>
                    <div class="price">Rp 1,200,000</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img src="https://i.pinimg.com/564x/c8/f7/5c/c8f75c6596ccd2de8a21b35e08cf65c1.jpg"
                            alt="Liverpool Home Jersey">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Liverpool Home Jersey</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> </div>
                    <div class="price">Rp 1,150,000</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://i.pinimg.com/564x/1c/e8/39/1ce839fc9e6d0f3d637a08fda173274c.jpg"
                            alt="Liverpool Home Jersey">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Chelsea Home Jersey</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                    <div class="price">Rp 1,150,000</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://i.pinimg.com/564x/e2/a2/7c/e2a27c46156ed0eb796253821584248e.jpg"
                            alt="Liverpool Home Jersey">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Tottenham Jersey</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                    <div class="price">Rp 1,150,000</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://i.pinimg.com/564x/5d/c5/69/5dc569d196cbfcd98dc20dcfbebfdad8.jpg"
                            alt="Liverpool Home Jersey">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Everton Home Jersey</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                    <div class="price">Rp 1,150,000</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://i.pinimg.com/564x/82/82/2c/82822cd134ed82f0542ed8e870d2635e.jpg"
                            alt="Liverpool Home Jersey">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Brentford Home Jersey</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                    <div class="price">Rp 1,150,000</div>
                </div>
                <div
                    class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <img
                            src="https://i.pinimg.com/564x/5f/bd/1a/5fbd1a3e791e4322543213dc456138f5.jpg"
                            alt="Liverpool Home Jersey">
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                        </ul>
                    </div>
                    <div class="tag bg-green">new</div>
                    <div class="title pt-4 pb-1">Liverpool Home Jersey</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span
                            class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                    <div class="price">Rp 1,150,000</div>
                </div>
            </div>
        </section> --}}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
