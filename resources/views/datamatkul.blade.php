<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Mata Kuliah</title>
  </head>
  <body>
    <h1 class="text-center" mb-4>Data Mata Kuliah Pendidikan Matematika</h1>
    <h2 class="text-center" mb-4>Semester 1</h2>
    <div class="container">
    <a href="/tambahmatakuliah" class="btn btn-success">Tambah</a>
    <div class="row">
      @if ($message = Session::get('success'))
      <div class="alert alert-info" role="alert">
            {{ $message }}
      </div>
      @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Mata Kuliah</th>
      <th scope="col">Jumlah SKS</th>
      <th scope="col">Dosen Pengampu</th>
      <th scope="col">Dibuat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->namamatakuliah }}</td>
      <td>{{ $row->jumlahsks }}</td>
      <td>{{ $row->dosenpengampu }}</td>
      <td>{{ $row->created_at->format('D M Y') }}</td>
      <td>
        <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->namamatakuliah }}">Delete</a>
        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-primary">Edit</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>
    </div>
    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script
  src="https://code.jquery.com/jquery-3.6.2.slim.min.js"
  integrity="sha256-E3P3OaTZH+HlEM7f1gdAT3lHAn4nWBZXuYe89DFg2d0="
  crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
  $('.delete').click( function(){
    var matkulid = $(this).attr('data-id');
    var namamatakuliah = $(this).attr('data-nama');

    swal({
  title: "Apakah Kamu Yakin?",
  text: "Kamu Akan Menghapus Data Matakuliah dengan Nama Mata Kuliah "+namamatakuliah+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/delete/"+matkulid+""
    swal("Data Berhasil Dihapus!", {
      icon: "success",
    });
  } else {
    swal("Data Tidak Jadi Dihapus!");
  }
});
  });
   
  </script>
</html>