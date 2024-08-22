<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-dark">List Jersey</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Jersey Detail</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>
                <strong>{{ $product->nama }}</strong>
            </h2>
            <h4>
                Rp. {{ number_format($product->harga) }}
                @if ($product->is_ready == 1)
                    <span class="badge badge-success"> <i class="fas fa-check"></i> Ready Stok</span>
                @else
                    <span class="badge badge-danger"> <i class="fas fa-times"></i> Stok Habis</span>
                @endif
            </h4>
            <hr>
            <div class="row">
                <table class="table" style="border-top: hidden;">
                    <tr>
                        <td>Liga</td>
                        <td>:</td>
                        <td>
                            <img src="{{ url('assets/liga') }}/{{ $product->liga->gambar }}" class="img-fluid" width="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis</td>
                        <td>:</td>
                        <td>{{ $product->jenis }}</td>
                    </tr>
                    <tr>
                        <td>Berat</td>
                        <td>:</td>
                        <td>{{ $product->berat }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td>
                            <input id="jumlah_pesanan" type="number"
                                class="form-control @error('jumlah_pesanan') is-invalid @enderror" name="jumlah_pesanan"
                                value="{{ old('jumlah_pesanan') }}" required autocomplete="jumlah_pesanan" autofocus>
            
                            @error('jumlah_pesanan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Name Set (Isi jika tambah nameset)</strong></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <input id="nama" type="text" name="nama"
                                class="form-control @error('nama') is-invalid @enderror" required autocomplete="nama" autofocus>
            
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Ukuran Baju</td>
                        <td>:</td>
                        <td>
                            <div class="form-group">
                                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="nomor" value="S" autocomplete="off" required> S
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="nomor" value="M" autocomplete="off" required> M
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="nomor" value="L" autocomplete="off" required> L
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="radio" name="nomor" value="XL" autocomplete="off" required> XL
                                    </label>
                                </div>
            
                                @error('nomor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>
                            <button type="submit" class="btn btn-dark btn-block d-flex justify-content-center align-items-center p-2">
                                <i class="fas fa-shopping-cart mr-2"></i> Tambah Keranjang
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<script src="https://kit.fontawesome.com/e1f618f385.js" crossorigin="anonymous"></script>

{{--  <h2>Product Detail {{ $product->nama }} </h2> --}}
