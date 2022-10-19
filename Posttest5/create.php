<?php 
   include('database.php');
?>

<link rel="stylesheet" href="style.css">

<div class="createContainer">
   <body>
      <a href="read.php" id="createA">KEMBALI KE READ</a>
      <H1 id="createH1">Membuat data baru</H1>
      <form action="" method="POST">
            <table>
               <tr>
                  <th>Nama</th>
                  <td><input type="text" name="nama"></td>
               </tr>
               <tr>
                  <th>Telepon</th>
                  <th><input type="number" name="telp"></th>
               </tr>
               <tr>
                  <th>Email</th>
                  <th><input type="email" name="email"></th>
               </tr>
            </table>
            <input type="submit" name="submit">
         </form>
      <?php 
         if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $telp = $_POST['telp'];
            $email = $_POST['email'];
   
            $create = mysqli_query($conn,"INSERT INTO pembeli VALUES(
               null,
               '".$nama."',
               '".$telp."',
               '".$email."'
            )");
   
            if($create){
               ?>
               <script>
               alert("Data berhasil ditambahkan");
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