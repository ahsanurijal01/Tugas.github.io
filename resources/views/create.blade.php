<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Halaman Tambah Mahasiswa</h1>
    <form action="" method="POST">
      <div class="row">
        <div class="col-sm-4">
          <label for="">NPM</label>
          <input type="nunber" class="form-control" name="npm" placeholder="Input NPM">
        </div>
        <div class="col-sm-4">
          <label for="">Nama Mahasiswa</label>
          <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Input nama mahasiswa">
        </div>
      <div class="col-sm-4">
        <label for="">Jenis kelamin</label>
        <select name="jk" id="" class="form-select">
          <option>L</option>
          <option>P</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control">
      </div>
      <div class="col-sm-4">
        <label for="">Alamat</label>
        <input type="text" name="alamat" placeholder="Input Alamat" class="form-control">
      </div>
      <div class="col-sm-4">
        <button class="btn btn-succsess" type="submit">Simpan</button>
      </div>
    </div>
    
    
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>
</div>