<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Reservasi Marble Hair Salon</h3>
        <div class="viewform">
            <?php
                echo nl2br("Nama depan: ");
                echo $_POST['namaDepan'];
                echo nl2br("\nNama belakang: ");
                echo $_POST['namaBelakang'];
                echo nl2br("\nNo Telepon: ");
                echo $_POST['notelp'];
                echo nl2br("\nTanggal reservasi: ");
                echo $_POST['tglbln'];
                echo nl2br("\nJenis layanan: ");
                echo $_POST['layanan'];
            ?>
        </div>
    </div>
    
</body>
</html>
