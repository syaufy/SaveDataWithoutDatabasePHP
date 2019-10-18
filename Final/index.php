<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <title>Login Form With PHP</title>
</head>

<body>
    <div class="row">
        <div class="col-10 container">
            <form action="process.php" method="post" name="form" class="form">
                <h1 class="text-center header">Daftar</h1>
                <div class="form-group">
                    <label for="Username">NIS</label>
                    <input type="text" name="nis" class="form-control" id="Username" placeholder="Masukan NIS ...">
                </div>
                <div class="form-group">
                    <label for="namasiswa">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" id="namasiswa" placeholder="Masukan Namamu disini  ...">
                </div>
                <h3 class="jk">Jenis Kelamin</h3>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki Laki">
                    <label class="form-check-label" for="exampleRadios1">
                        Laki Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Perempuan">
                    <label class="form-check-label" for="exampleRadios1">
                        Perempuan
                    </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                        <option>Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat Lahir</label>
                    <input type="text" name="tempatlahir" class="form-control" id="ttl" placeholder="Masukan Tempat Lahir  ...">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir</label> <br>
                    <input type="date" name="tanggallahir" class="tanggal" id="tanggal">
                </div>
                <br>
                <div class="form-group">
                    <label for="ortu">Nama Orang Tua</label>
                    <input type="text" name="orangtua" class="form-control" id="ortu" placeholder="Masukan nama orang tua mu  ...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Diterima Di</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
                        <option>AKL 1</option>
                        <option>AKL 2</option>
                        <option>AKL 3</option>
                        <option>AKL 4</option>
                        <option>RPL</option>
                        <option>MM</option>
                        <option>TB</option>
                        <option>TB 2</option>
                        <option>OTKP 1</option>
                        <option>OTKP 2</option>
                        <option>AP</option>
                        <option>AP 2</option>
                        <option>AP 3</option>
                        <option>AP 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alasan Masuk SMK</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alasan"></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email Mu Disini ...">
                </div>
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" name="username" class="form-control" id="email" placeholder="Masukan Username ...">
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" name="password" class="form-control" id="email" placeholder="Masukan Password ...">
                </div>
                <button type="submit" name="submit" class="btn btn-info btn1">OK</button>
                <button type="reset" class="btn btn-danger btn">Reset</button>
            </form>
        </div>
    </div>
















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>