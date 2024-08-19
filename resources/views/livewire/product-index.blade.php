    <div class="container">
        <div class="row mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Semua Produk</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>List <strong>Jersey</strong></h2>
            </div>
            <div class="col">
                <div class="input-group-index">
                    <input placeholder="Search.." id="input" class="input" name="text" type="text">
                </div>
            </div>
        </div>

        <section class="products mb-5">
            <div class="row mt-4">
                @foreach ($products as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <h5><strong>{{ $product->nama }}</strong> </h5>
                                        <h5>Rp. {{ number_format($product->harga) }}</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <a href="#" class="btn btn-dark btn-block">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row">
                    <div class="col">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
