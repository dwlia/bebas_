@extends('index')

@section('MainContent')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Tambah Data User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data User</h1>
        <form action="/kirimuser" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">NAMA BARANG</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga">HARGA BARANG</label>
                <input type="text" name="harga" id="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kategori">KATEGORI BARANG</label>
                <input type="text" name="kategori" id="kategori" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="foto">FOTO BARANG</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Kirim</button>
                <a href="/user" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
@endsection