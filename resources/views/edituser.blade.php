@extends('index')
@section('MainContent')
<h1>Ini Edit User</h1>
<div class="card">
<div class="card-header"><h1>Edit Data</h1></div>
<form action="/edituser/{{$user->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="" class="form-label">nama</label>
        <input type="text" name="nama" id="nama" class="form_control" value="{{$user->nama}}" required>
    </div>
    <div class="form-group">
        <label for="harga" class="form-label">Harga Barang</label>
        <input type="text" name="harga" id="harga" class="form_control" value="{{$user->harga}}" required>
    </div>
    <div class="form-group">
        <label for="foto" class="form-label"> Foto</label>
        <img src="{{asset('img/')}}/{{$user->foto}}" alt="" width="100px">
        <input type="file" name="foto" id="foto" class="form_control" >
    </div>

    <div class="card-footer">
        <a href="/profile" class="btn btn-danger">Batal</a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</form>
</div>
@endsection

