@extends('layouts.fe.index')

@section('content')

    <!-- PROFILE -->
    <div class="container">
        <!-- BOOKING NOW -->
        <div class="card mb-4">
            <form class="card-body row" action="{{ route('fe.bookingAdd') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3 class="col-12 card-title text-center mb-4">FORM BOOKING NOW</h3>
                <div class="col-md-12 mb-3">
                    <label for="product_id" class="form-label">Pilihan Paket</label>
                    <select name="product_id" id="product_id" class="form-select" aria-label="Default select example" required>
                        @foreach ($packages as $package)
                        <option value="{{ $package->id }}">{{ $package->name.' - '.$package->body.' - '.number_format($package->price,2,',','.') }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="whatsapp" class="form-label">Nomer WhatsApp</label>
                    <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ '+62'.Auth::user()->phone }}" disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="date_start" class="form-label">Tanggal dan Jam Booking</label>
                    <input type="datetime-local" name="date_start" id="date_start" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tf" class="form-label">Bukti Transfer/Pembayaran DP 50%</label>
                    <input type="file" name="tf" id="tf" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" id="address" class="form-control" rows="10" required>Jl. Boulevard Hijau Raya No.56 Blok A3, RT.006/RW.009, Pejuang, Kecamatan Medan Satria, Bekasi Regency, Jawa Barat 17131</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="note" class="form-label">Catatan</label>
                    <textarea name="note" id="note" class="form-control" rows="10" required>Minimal DP 50%</textarea>
                </div>
                <div class="col-md-12 d-grid gap-2 d-md-flex justify-content-md-end mt-4 mb-3">
                    <button class="btn btn-sm btn-outline-primary" type="submit">CHECKOUT BOOKING NOW</button>
                </div>
            </form>
        </div>
        <!-- BOOKING NOW -->
    </div>
    <!-- PROFILE -->

@endsection
