<?php

if(
    !isset($_GET["nim"])||
    !isset($_GET["nama"])||
    !isset($_GET["jurusan"])||
    !isset($_GET["email"])||
    !isset($_GET["nilai"])||
    !isset($_GET["grade"])||
    !isset($_GET["status"])
){
    header("Location: index.php");
    exit;
}

$nim = $_GET["nim"];
$nama = $_GET["nama"];
$jurusan = $_GET["jurusan"];
$email = $_GET["email"];
$nilai = $_GET["nilai"];
$grade = $_GET["grade"];
$status = $_GET["status"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>

    <style>
        body {
            margin: 0;
            padding: 35px;
            background-color: #21191D;
            color: #FFF1F6;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            color: #921039;
            text-align: center;
            margin-bottom: 30px;
        }

        .kartu {
            background-color: #342329;
            max-width: 600px;
            margin: auto;
            padding: 25px;
            border: 1px solid #50343F;
            border-radius: 12px;
        }

        p {
            padding: 12px;
            border-bottom: 1px solid #50343F;
            margin: 0;
            line-height: 1.6;
        }

        a {
            display: block;
            width: fit-content;
            margin: 25px auto 0;
            background-color: #D95F91;
            color: #21191D;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 7px;
            font-weight: bold;
        }

        a:hover {
            background-color: #F6C4D7;
        }

        .container{
            padding: 20px;
            width: fit-content;
            margin: auto;
            background-color: #fac0d8;
            border-radius: 10px;
            box-shadow: 0px 0px 5px white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

</head>
<body>
    <div class="container">
        <h2>Detail Mahasiswa</h2>

        <div class="kartu">
            <p>NIM: <?php echo $nim; ?></p>
            <p>Nama: <?php echo $nama; ?></p>
            <p>Jurusan: <?php echo $jurusan; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p>Nilai: <?php echo $nilai; ?></p>
            <p>Grade: <?php echo $grade; ?></p>
            <p>Status: <?php echo $status; ?></p>
        </div>

        <a href="index.php">Kembali</a>
    </div>
</body>
</html>
