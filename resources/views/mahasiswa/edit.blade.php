<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div style="background-image: url('../images/3.png'); height: 130%;">
        <div class="vertical-center">
            <!-- 
        ^--- Added class  -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 justify-content-center">
                        <div class="card" style="margin-top: 3%">
                            <div class="card-body">
                                <form method="post" action="{{ route('update', $user->id ) }}" class="form" id="userForm"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" value="<?php echo $user['id'];?>" name = "id" hidden>
                                    <div class="text-center" style="font-size: 13px">
                                        <h3>Edit Mahasiswa</h3>
                                    </div>
                                    <div class="w-95 p-3 align-center">
                                        <label for="address" class="form-label">Nim</label>
                                        <input type="text" class="form-control" id="address" name="nim" value="<?php echo $user['nim']; ?>">
                                    </div>
                                    <div class="w-95 p-3 align-center">
                                        <label for="address" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="address" name="nama" value="<?php echo $user['namamhs']; ?>">
                                    </div>
                                    <div class="w-95 p-3 align-center">
                                        <span>Jenis Kelamin</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk"
                                                id="flexRadioDefault1" value="L"  <?php if($user['jk']=='L') echo 'checked'?>>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Laki-Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" value="P"
                                                id="flexRadioDefault2" <?php if($user['jk']=='P') echo 'checked'?>>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="w-95 p-3 align-center">
                                        <label for="address" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="address" name="alamat" value="<?php echo $user['alamat']; ?>">
                                    </div>
                                    <div class="w-95 p-3 align-center">
                                        <label for="address" class="form-label">Kota</label>
                                        <input type="text" class="form-control" id="address" name="kota" value="<?php echo $user['kota']; ?>">
                                    </div>
                                    <div class="w-95 p-3 align-center">
                                        <label for="address" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="address" name="email" value="<?php echo $user['email']; ?>">
                                    </div>
                                    <input type="text" value="<?php echo $user['foto'];?>" name = "foto_hidden" hidden>
                                    <div class="w-95 p-3 align-center">
                                        <span>Foto Sekarang</span>
                                        <br>
                                        <img src="{{url('/images/'.$user['foto'])}}"
                                                    style="width: 150; height: 200">
                                    </div>
                                    <div class="w-95 p-3 align-center">
                                        <span>Uploud Foto</span>
                                        <input type="file" name="foto" id="file" class="form-control">
                                    </div>
                                    <div class="container" style="margin-top: 2%">
                                        <div class="row justify-content-center">
                                            <div class="col-md-auto">
                                                <button type="submit" class="btn btn-primary ml-4">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>