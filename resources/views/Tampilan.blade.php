<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien | Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="card-body">
  <div class="card-header">
      <h3 class="card-title position-relative text-center">Data Booking Antrian Puskesmas</h3>
      <a role="button" href="{{ route('keluar') }}" class="btn btn-dark">Logout</a> 
  </div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NIK</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">jenis kelamin</th>
      <th scope="col">No Antrian</th>
      <th scope="col">No Handphone</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        @foreach($antrian as $data)
        <tr>
            <td>{{ $data->nik}}</td>
            <td>{{ $data->nama_pasien}}</td>
            <td>{{ $data->jenis_kelamin}}</td>
            <td>{{ $data->no_antrian}}</td>
            <td>{{ $data->no_handphone}}</td>
            <td>{{ $data->alamat}}</td>
            <td>
               <a href="/edit/{{ $data->nik }}" class="btn btn-primary">EDIT</a>
              <a href="/delete/{{ $data->nik }}" class="btn btn-danger">DELETE</a>
            </td>
        </tr>
        @endforeach
  </tbody>
</table>
<a href="/create" type="submit" class="btn btn-success btn-lg">TAMBAH</a>
</div>
</body>
</html>