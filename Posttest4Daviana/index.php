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
        <form action="process.php" method="post" class="form">
            <div class="dataDiri">
                <label for="namaDepan">Nama depan: </label><br>
                <input type="text" id="namaDepan" name="namaDepan" required><br>
            
                <label for="namaBelakang">Nama belakang:</label><br>
                <input type="text" id="namaBelakang" name="namaBelakang"><br>

                <label for="notelp">Nomor telepon: </label><br>
                <input type="tel" id="notelp" name="notelp"  pattern="+62[7-9]{2}-[0-9]{3}-[0-9]{4}" value="+62" required>
            </div>
            <div class="waktulayanan">
                <label for="tglbln">Tanggal reservasi</label><br>
                <input type="date" id="tglbln" name="tglbln" min="2022-10" required><br>
                <p>Jenis layanan</p>
                <input type="radio" id="haircut" name="layanan" value="Haircut" required>
                <label for="Haircut">Haircut</label><br>

                <input type="radio" id="haircoloring" name="layanan" value="Hair coloring">
                <label for="Hair coloring">Hair coloring</label><br>

                <input type="radio" id="treatment" name="layanan" value="Treatment">
                <label for="Treatment">Treatment</label><br>
                
                <input type="radio" id="smoothing" name="layanan" value="Smoothing">
                <label for="Smoothing">Smoothing</label><br>

                <input type="radio" id="curly" name="layanan" value="Curly">
                <label for="Curly">Curly</label><br>

                <input type="radio" id="creambath" name="layanan" value="Creambath">
                <label for="Creambath">Creambath</label><br>

                <input type="radio" id="lainnya" name="layanan" value="Lainnya">
                <label for="Lainnya">Lainnya</label><br>

            </div>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    
</body>
</html>

