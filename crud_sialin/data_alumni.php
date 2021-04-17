<?php
include 'conn.php';

$data = mysqli_query($conn,"select * from user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    

    <table class="table">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Asal Sekolah
                </th>
                <th>
                    Jenis Kelamin
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['asal_sekolah']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
    </table>
    <?php
    $data = mysqli_query($conn,"select * from perusahaan");
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Nama
                </th>
                <th>
                    alamat
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
    </table>

    <?php
    $data = mysqli_query($conn,"select * from lowongan");
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>
                    Deskripsi
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $d['deskripsi']; ?></td>
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>