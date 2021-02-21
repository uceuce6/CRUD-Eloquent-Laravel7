<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>TAMBAH DATA</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card header text-center">
                <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/pegawai" class="btn btn-primary">KEMBALI</a>
                <br/>
                <br/>

                <form method="post" action="/pegawai/store">

                    {{ csrf_field() }}

                    <div class="form-group">
                     <label>NIP</label>
                     <input type="text" name="nip" class="form-control" placeholder="NIP ..">

                     @if($errors->has('nip'))
                        <div class="text-danger">
                            {{ $errors->first('nip')}}
                        </div>
                    @endif

                    </div>

                    <div class="form-group">
                     <label>NAMA</label>
                     <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai ..">

                     @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                    @endif

                    </div>

                    <div class="form-group">
                        <label>ALAMAT</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Pegawai .."></textarea>

                    @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                    @endif
                    </div>

                    <div class="form-group">
                     <label>UNIT KERJA ID</label>
                     <input type="text" name="unit_kerja_id" class="form-control" placeholder="Unit Kerja ..">

                     @if($errors->has('unit_kerja_id'))
                        <div class="text-danger">
                            {{ $errors->first('unit_kerja_id')}}
                        </div>
                    @endif

                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
