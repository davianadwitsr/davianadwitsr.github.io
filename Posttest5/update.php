<?php
include('database.php');
?>

<link rel="stylesheet" href="style.css">

<div class="updateContainer">
   <body>
      <a href="read.php">KEMBALI KE READ</a>
   
      <H1>UPDATE</H1>
      <form action="" method="POST">
         <?php
         $tampil = mysqli_query($conn, "SELECT * FROM pembeli WHERE id = '" . $_GET['id_pembeli'] . "'");
         if (mysqli_num_rows($tampil) > 0) {
            while ($row = mysqli_fetch_array($tampil)) {
         ?>
               <table>
                  <input type="text" name="id" value="<?php echo $row['id']; ?>">
                  <tr>
                     <th>Nama</th>
                     <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
                  </tr>
                  <tr>
                     <th>Telp</th>
                     <th><input type="number" name="telp" value="<?php echo $row['telp']; ?>"></th>
                  </tr>
                  <tr>
                     <th>Email</th>
                     <th><input type="email" name="email" value="<?php echo $row['email']; ?>"></th>
                  </tr>
               </table>
         <?php
            }
         }
         ?>
         <input type="submit" name="submit" value="Update">
      </form>
      <?php
      if (isset($_POST['submit'])) {
         $id = $_POST['id'];
         $nama = $_POST['nama'];
         $telp = $_POST['telp'];
         $email = $_POST['email'];
   
         $update = mysqli_query($conn, "UPDATE pembeli SET
            nama = '$nama',
            telp = '$telp',
            email = '$email',
            WHERE id_pembeli = '$id'"
         );
   
         if ($update) {
      ?>
            <script>
               alert("Data berhasil di update");
               window.location=('read.php');
            </script>
      <?php
         } else {
            echo "Gagal" . mysqli_error($conn);
         }
      }
      ?>
   
   </body>
   
   </html>
</div>
