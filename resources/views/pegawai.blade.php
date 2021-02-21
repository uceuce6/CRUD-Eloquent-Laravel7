<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD ELOQUENT LARAVEL</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD DATA PEGAWAI
            </div>
            <div class="card-body">
             <a href="/pegawai/tambah" class="btn btn-primary">INPUT PEGAWAI BARU</a>
             <br/>
             <br/>

             <table class="table table-bordered table-hover table-striped">
                <thead>
                 <tr>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>UNIT KERJA</th>
                  <th>OPSI</th>
                 </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->nip }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->unit_kerja_id }}</td>
                        <td>
                            <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">EDIT</a>
                            <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
            </div>
        </div>
    </div>
</body>
</html>
