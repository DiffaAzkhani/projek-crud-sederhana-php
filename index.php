<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program CRUD</title>
</head>

<body>
    <h1 style="text-align: center">Program CRUD</h1>
    <h2 style="text-align: center">Diffa Azkhani (A12.2020.06496)</h2>

    <h3>Form Input Data</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="">Nim</label></td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><label for="">Ipk</label></td>
                <td><input type="text" name="ipk"></td>
            </tr>
            <tr>
                <td><input type="button" value="Simpan Data" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>