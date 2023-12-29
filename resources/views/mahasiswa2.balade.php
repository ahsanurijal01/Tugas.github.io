<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Ini adalah halaman Mahasiswa</h1>
    <div class="row">
      <div class="col-sm-6">
        <h4>Tabel Mahasiswa</h4>
      </div>
      <div class="col-sm-6" style="text-align: right">
        <a href="/mahasiswa/create" class="btn btn-info btn-sm">Tambah Mahasiswa</a>        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        @if (Session::has('success'))
            {{-- <div class="pt-3">
              <div class="alert alert-success">
                {{ Session::get('success') }}
              </div>
            </div> --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Successfully</strong> {{ Session::get('success') }}.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>NPM</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kelamin</th>
              <th colspan="2">TTL</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>

          @foreach ($mahasiswa as $m)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $m->npm }}</td>
              <td>{{ $m->nama_mahasiswa }}</td>
              <td>{{ $m->jk }}</td>
              <td>{{ $m->tgl_lahir }}</td>
              <td>{{ $m->alamat }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
   
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>