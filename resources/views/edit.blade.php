<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit antrian | Puskesmas</title>
</head>
<body>
    <body style="background: lightgray">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header">
                         <h3 class="card-title position-relative">Edit Data</h3>
                     </div>
                     <div class="card-body">
                         <form action="/update" method="post">
                        <div class="mb-3">
                            <input type="hidden" name="nik" value="{{ $antrian->nik }}">
                            <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" name="pasien" id="exampleFormControlInput1" value="{{ $antrian->nama_pasien}}" placeholder="Nama Pasien">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="kelamin" id="exampleFormControlInput1" value="{{ $antrian->jenis_kelamin}}" placeholder="Jenis Kelamin">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No Antrian</label>
                            <input type="number" class="form-control" name="antrian" id="exampleFormControlInput1" value="{{ $antrian->no_antrian}}" placeholder="No Antrian">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No Handphone</label>
                            <input type="number" class="form-control" name="no_hp" id="exampleFormControlInput1" value="{{ $antrian->no_handphone}}" placeholder="No Handphone">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" value="{{ $antrian->alamat}}" placeholder="Alamat">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    </body>
</body>
</html>