<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>
<body>
<div style="background-image: url('../images/3.png'); height: 100%;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md justify-content-center">
                <div class="card" style="margin-top: 5%">
                    <div class="card-body">
                        <div class="container">
                            <div class="text-center">
                                <h3>Data Mahasiswa</h3>
                            </div>
                        </div>
                        @if (session('success'))
                        <div class="alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                        @endif
                        <div class="container">
                            <a class="btn btn-primary" href="{{ route('create') }}" role="button">Tambah Mahasiswa</a>
                            <div class="row" style="margin-top: 1%;">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Email</th>
                                            <th>Foto</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mahasiswa as $key => $user)
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $user['nim']; ?></td>
                                            <td><?php echo $user['namamhs']; ?></td>
                                            <td><?php echo $user['jk']; ?></td>
                                            <td><?php echo $user['alamat']; ?></td>
                                            <td><?php echo $user['kota']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><img src="{{url('/images/'.$user['foto'])}}"
                                                    style="width: 150; height: 200">
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('edit', $user['id']) }}" role="button">Edit</a>
                                            </td>
                                            <form method="POST" action="{{ route('destroy', $user['id']) }}">
                                                @csrf
                                                @method('DELETE')
                                                <td><button class="btn btn-danger">Hapus</button></td>
                                            </form>
                                            
                                        </tr>                                       
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>