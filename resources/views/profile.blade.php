@extends('index')

@section('MainContent')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Table dengan CSS Menarik</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      background: black;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      color: black;
    }

    table.custom-table {
      width: 100%;
      border-collapse: collapse;
    }

    table.custom-table th, table.custom-table td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    table.custom-table th {
      background-color: #f2f2f2;
    }

    table.custom-table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    table.custom-table tbody tr:hover {
      background-color: #ddd;
    }

    table.custom-table img {
      display: block;
      max-width: 100%;
      height: 100px;
    }
    /* Gaya tombol */
    .action-button {
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 2px 2px;
            cursor: pointer;
            border-radius: 3px;
        }

        .edit {
            background-color: #4CAF50; /* Hijau */
        }

        .detail {
            background-color: #2196F3; /* Biru */
        }

        .hapus {
            background-color: #f44336; /* Merah */
        }
  </style>
</head>
<body>
    <h1>DATA BARANG</h1>
    <a href = "/tambahuser" class="btn btn-success"> + Tambah Data</a><br></br>
  <table class="custom-table">
    <thead>
      <tr>
        <th>No</th>
        <th>ID BARANG</th>
        <th>NAMA BARANG</th>
        <th>HARGA BARANG</th>
        <th>KATEGORI BARANG</th>
        <th>FOTO BARANG</th>
        <th></th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
     @foreach($db as $avatar)

     <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$avatar->id}}</td>
        <td>{{$avatar->nama}}</td>
        <td>{{$avatar->harga}}</td>
        <td>{{$avatar->kategori}}</td>
        <td>{{$avatar->foto}}</td>
        <td><img src="{{asset('asset/img/' .$avatar->foto)}}" alt="" width='100px'></td>
        <td>

                    <a href="/profile/detail/{{$avatar->id}}" class='btn btn-succes'>Detail</a>
                    <a href="/profile/edit/{{$avatar->id}}" class='btn btn-warning'>Edit</a>
                    <!-- <form action="/profile/hapus/{{$avatar->id}}">
                      @csrf
                      @method('DELETE')
                      <button class='btn btn-danger'>Hapus</button>
                    </form> -->
                    <a href="/profile/hapus/{{$avatar->id}}" class='btn btn-danger'>Hapus</a>
                </td>
</tr>
@endforeach
    </tbody>
  </table>
</body>
</html>
@endsection