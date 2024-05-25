@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('barang.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang"
                                value="{{ old('nama_barang') }}" placeholder="Nama Barang" required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                value="{{ old('harga') }}" placeholder="Harga Barang" required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label class="form-label">Stok</label>
                            <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok"
                                value="{{ old('stok') }}" placeholder="Stok Barang" required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <label class="form-label">Id Merek</label>
                            <input type="text" class="form-control @error('id_merek') is-invalid @enderror" name="id_merek"
                                value="{{ old('id_merek') }}" placeholder="Id" required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection