<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        @if(session('pesan'))
            <div class="alert alert-success">
                {{session('pesan')}}
            </div>
        @endif
        <h1 style="text-align: center;">DATA MAHASISWA</h1>
        <a href=/create class="btn btn-success">Tambah data</a>
        <section>
            <table class="table table-striped">
                <thead class=" thead-dark">
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>UMUR</th>
                        <th>ALAMAT</th>
                        <th>KOTA</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                        <th>ACTION</th>

                    </tr>
                </thead>  
                <tbody>        
                    @foreach ($datanya as $dt)
                    <tr>
                        <td>{{$dt->nim}}</td>
                        <td>{{$dt->nama}}</td>
                        <td>{{$dt->umur}}</td>
                        <td>{{$dt->alamat}}</td>
                        <td>{{$dt->kota}}</td>
                        <td>{{$dt->kelas}}</td>
                        <td>{{$dt->jurusan}}</td>
                        <td>
                            <a href="/delete?nim={{$dt->nim}}" class="btn btn-danger" onclick="return confirm('Yakin data mau dihapus ?');">HAPUS</a>
                            <a href="/edit?nim={{$dt->nim}}" class="btn btn-primary" onclick="return confirm('Yakin data mau diedit ?');">EDIT</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>    
            </table>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>