@extends('index')
@section('MainContent')
    <h1>ini Tambah Data User</h1>
    <div class="card">
        <div class="card-header"><h1>Tambah Data</h1></div>
        <div class="form-group">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" name="nama" id="nama" class="form_control" value="{{$user->nama}}" readonly>
        </div>
        <div class="form-group">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="text" name="harga" id="harga" class="form_control" value="{{$user->harga}}" readonly>
        </div>
        <div class="form-group">
            <label for="kategori" class="form-label">KATEGORI BARANG</label>
            <input type="text" name="kategori" id="kategori" class="form_control" value="{{$user->harga}}" readonly>
        </div>
        <div class="form-group">
            <label for="foto" class="form-label"> FOTO BARANG</label>
            <img src="{{asset('img/')}}/{{$user->foto}}" alt="" width="100px">
        </div>

        <div class="card-footer">
            <a href="/profile" class="btn btn-danger">Batal</a>
        </div>
    </div>
@endsection