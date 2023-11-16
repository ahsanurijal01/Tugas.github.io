<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perulangan table2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Halaman Tabel</h1>

        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < $jumlah; $i++)  
                <tr>
                    <th>{{ $npm[$i]}}</th>
                    <th>jamal</th>
                    <th>Medan, 14-10-2000</th>
                    <th>Tembung</th>
                </tr>
                @endfor
            </tbody>
    
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
