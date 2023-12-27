<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <div class="card">
        <h1 class="card-header text-center font-weight-bold">EDIT DATA MAHASISWA</h1>
        <a href="/read" class="btn btn-success">Tampilkan data</a>
    <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{url('store-mahasiswa')}}">
            @csrf
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required value="{{$datanya->nim}}">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="{{$datanya->nama}}">
            </div>            
            <div class="form-group">
                <label>Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" required value="{{$datanya->umur}}">
            </div>            
            <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" class="form-control" id="alamat" name="alamat" required >{{$datanya->alamat}}</textarea>
            </div>            
            <div class="form-group">
                <label>Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" required value="{{$datanya->kota}}">
            </div>              
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required value="{{$datanya->kelas}}">
            </div>          
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required value="{{$datanya->jurusan}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>