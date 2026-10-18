<?php
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Langit Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "Pratama@upi.edu",
        "nilai" => 97
    ],
    [
        "nim" => "25002",
        "nama" => "Judas Girham",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "Girham@upi.edu",
        "nilai" => 68
    ],
    [
        "nim" => "25003",
        "nama" => "Asmeray Mona",
        "jurusan" => "Pendidikan Guru Pendidikan Anak Usia Dini",
        "email" => "Mona@upi.edu",
        "nilai" => 95
    ],
        [
        "nim" => "25004",
        "nama" => "Angkasa Merapi",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "Merapi@upi.edu",
        "nilai" => 50
    ],
    [
        "nim" => "25005",
        "nama" => "Aurora Laluna",
        "jurusan" => "Pendidikan Guru Sekolah Dasar",
        "email" => "Laluna@upi.edu",
        "nilai" => 90
    ],
        [
        "nim" => "25006",
        "nama" => "Lee Loman",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "Loman@upi.edu",
        "nilai" => 70
    ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mahasiswa</title>

    <style>
        body {
            margin: 0;
            padding: 35px;
            background-color: #21191D;
            color: #F8EDF2;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #F2C6D4;
            text-align: center;
            margin-bottom: 10px;
        }

        h4 {
            color: #F2C6D4;
            text-align : center;
            margin-bottom: 30px;
        }

        .lulus {
            background-color: #198754;
            color: #FFFFFF;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: bold;
        }

        .tidak_lulus {
            background-color: #DC3545;
            color: #FFFFFF;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #342329;
            border: 1px solid #493746;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #D95F91;
            color: #21191D;
            padding: 15px 12px;
            text-align: left;
        }

        td {
            padding: 13px 12px;
            border-bottom: 1px solid #50343F;
            color: #F8EDF2;
        }

        tbody tr:nth-child(even) {
            background-color: #3B2931;
        }

        tbody tr:hover {
            background-color: #50313F;
        }

        a {
            display: inline-block;
            background-color: #D95F91;
            color: #21191D;
            text-decoration: none;
            padding: 9px 14px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: bold;
            transition: 0.2s;
        }

        a:hover {
            background-color: #F6C4D7;
            color: #17131B;
        }

        body > a {
            margin-top: 24px;
            padding: 12px 20px;
        }
    </style>

</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <h4>Mini Website PHP Dasar</h4>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>
    </thead>

    <tbody>
        <?php $no=1; ?>
        <?php foreach ($mahasiswa as $data) : ?>

        <?php
        if ($data["nilai"] >= 80) {
            $grade = "A";
        } elseif ($data["nilai"]>=70) {
            $grade = "B";
        } elseif ($data["nilai"]>=60) {
            $grade = "C";
        } else {
            $grade = "D";
        }
        ?>

        <?php
        if ($data["nilai"] >=70) {
            $status = "Lulus";
            $warna_status = "lulus";
        } else {
            $status = "Tidak Lulus";
            $warna_status = "tidak_lulus";
        }
        ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data["nim"] ?></td>
                <td><?php echo $data["nama"] ?></td>
                <td><?php echo $data["jurusan"] ?></td>
                <td><?php echo $data["email"] ?></td>
                <td><?php echo $data["nilai"] ?></td>
                <td><?php echo $grade ?></td>
                <td>
                    <span class="<?php echo $warna_status; ?>">
                        <?php echo $status; ?>
                    </span>
                </td>
                <td>
                     <a href="detail.php?nim=<?php echo $data['nim']; ?>&nama=<?php echo $data['nama']; ?>&jurusan=<?php echo $data['jurusan']; ?>&email=<?php echo $data['email']; ?>&nilai=<?php echo $data['nilai']; ?>&grade=<?php echo $grade; ?>&status=<?php echo $status; ?>">Lihat Detail</a>
                </td>
            </tr>
        <?php $no++ ?>
        <?php endforeach; ?>
    </tbody>
</table>

    <a href="form_pesan.php">Kesan dan Pesan</a>
</body>
</html>