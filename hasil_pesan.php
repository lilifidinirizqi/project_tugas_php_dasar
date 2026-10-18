<?php 
if(
    !isset($_POST["nama_lengkap"])||
    !isset($_POST["kelas"])||
    !isset($_POST["kesan_pesan"])
){
    header("Location: form_pesan.php");
    exit;
}

$nama_lengkap = $_POST["nama_lengkap"];
$kelas = $_POST["kelas"];
$kesan_pesan = $_POST["kesan_pesan"];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan dan Kesan</title>

    <style>
        body {
            margin: 0;
            padding: 35px 20px;
            background-color: #21191D;
            color: #FFF1F6;
            font-family: Arial, sans-serif;
        }

        .kartu {
            background-color: #342329;
            max-width: 550px;
            margin: 40px auto;
            padding: 25px;
            border: 1px solid #50343F;
            border-radius: 12px;
        }

        h3 {
            color: #D95F91;
            text-align: center;
            margin-top: 0;
        }

        h4 {
            color: #F6C4D7;
            text-align: center;
            margin-bottom: 25px;
        }

        p {
            color: #fff1f6;
            padding: 12px;
            border-bottom: 1px solid #fff1f6;
            line-height: 1.6;
            overflow-wrap: anywhere;
        }

        a {
            display: block;
            width: fit-content;
            margin: 25px auto 0;
            padding: 12px 22px;
            background-color: #D95F91;
            color: #21191D;
            text-decoration: none;
            border-radius: 7px;
            font-weight: bold;
        }

        a:hover {
            background-color: #F6C4D7;
        }
    </style>

</head>
<body>
    <div class="kartu">
        <h3>Pesan Sudah Berhasil Terkirim!</h3>
        <h4>Terima Kasih, <?php echo $nama_lengkap;?></h4>

        <p>Nama Lengkap : <?php echo $nama_lengkap; ?></p>
        <p>Kelas : <?php echo $kelas; ?></p>
        <p>Kesan dan Pesan : <?php echo $kesan_pesan; ?></p>

        <a href="index.php">Kembali ke Data Mahasiswa</a>
    </div>
</body>
</html>