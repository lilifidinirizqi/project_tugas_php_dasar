<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kesan Pesan</title>

    <style>
        body {
            margin: 0;
            padding: 35px 20px;
            background-color: #21191D;
            color: #FFF1F6;
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #F6C4D7;
            text-align: center;
            margin-bottom: 25px;
        }

        form {
            background-color: #342329;
            max-width: 500px;
            margin: auto;
            padding: 25px;
            border: 1px solid #50343F;
            border-radius: 12px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #F6C4D7;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            background-color: #21191D;
            color: #FFF1F6;
            border: 1px solid #805267;
            border-radius: 7px;
        }

        input:focus {
            outline: 2px solid #D95F91;
        }

        .tombol-form {
            display: flex;
            gap: 12px;
            margin-top: 10px;
        }

        button,
        .kembali {
            flex: 1;
            padding: 12px;
            box-sizing: border-box;
            border-radius: 7px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        button {
            background-color: #D95F91;
            color: #21191D;
            border: none;
        }

        button:hover {
            background-color: #F6C4D7;
        }

        .kembali {
            background-color: #50343F;
            color: #FFF1F6;
            border: 1px solid #805267;
        }

        .kembali:hover {
            background-color: #805267;
            color: #FFFFFF;
        }
    </style>

</head>
<body>
    <h2>Form Kesan Pesan</h2>
    <form action="hasil_pesan.php" method="POST">
        Masukan Namamu : 
        <input type="text" name="nama_lengkap">
        <br><br>
        Masukan Kelasmu :
        <input type="text" name="kelas">
        <br><br>
        Apa Kesan/Pesan yang ingin disampaikan :
        <input type="text" name="kesan_pesan">

        <div class="tombol-form">
            <button type="submit" name="tombol_kirim">
                Kirim
            </button>     
            
            <a class="kembali" href="index.php">Kembali</a>   
        </div>
    </form>
</body>
</html>