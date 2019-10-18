
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Hasil Data!</title>
  </head>
  <body>
  <?php
    if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $nis  = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk=$_POST['jk'];
    $agama = $_POST['agama'];
    $tempatlahir=$_POST['tempatlahir'];
    $tanggallahir=$_POST['tanggallahir'];
    $ortu=$_POST['orangtua'];
    $alamat=$_POST['alamat'];
    $jurusan=$_POST['jurusan'];
    $alasan=$_POST['alasan'];
    $email=$_POST['email'];
}
?>
<div class="row">
    <div class="col-10 container">
    <div class="row">
        <div class="col-6">
            <img src="img2.png" class="image text-center">
        </div>
    
    <div class="col-6 data mx-auto">
        <h1 class="text-center header">Hasil Data Kamu!</h1>
        <div class="tulisan">
        <p>Nama Kamu Adalah : <?php echo"$nama" ?></p>
        <p>NIS Kamu Adalah : <?php echo"$nis" ?></p>
        <p>Jenis Kelamin Kamu Adalah : <?php echo"$jk" ?></p>
        <p>Agama Kamu Adalah : <?php echo"$agama" ?></p>
        <p>Tempat Lahir Kamu Adalah : <?php echo"$tempatlahir" ?></p>
        <p>Tanggal Lahir Adalah : <?php echo"$tanggallahir" ?></p>
        <p>Nama Orang Tuamu Adalah : <?php echo"$ortu" ?></p>
        <p>Alamat Kamu Adalah : <?php echo"$alamat" ?></p>
        <p>Jurusan Kamu Adalah : <?php echo"$jurusan" ?></p>
        <p>Alasan Kamu Masuk Ke SMKN 1 Camis Adalah : <?php echo"$alasan" ?></p>
        <p>Email mu Adalah : <?php echo"$email" ?></p>
        <p>Username Kamu Adalah : <?php echo"$user" ?></p>
        <p>Password Kamu Adalah : <?php echo"$pass" ?></p>
        <a href="login.php"><button type="submit" name="submit" class="btn btn-info btn1">Login Kuy</button></a>
        </div>
    </div>
    </div>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


