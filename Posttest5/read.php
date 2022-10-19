<?php 
   include('database.php');
?>

<link rel="stylesheet" href="style.css">

<div class="readContainer">
   <h1 style="background-color: FF8787; border-radius: 10px; height: 80px; width: 650px; margin: auto; margin-bottom: 30px;">Reservasi Marble Hair Salon</h1>
   <a href="create.php" class="btn tambah">TAMBAH DATA</a>
   <table class="center">
      <div class="readThead">
         <thead>
            <tr>
               <th>No</th>
               <th>Nama</th>
               <th>Nomor Telepon</th>
               <th>Email</th>
            </tr>
         </thead>
      </div>
      <tbody>
         <?php 
            $read = mysqli_query($conn, "SELECT * FROM pembeli");
            if(mysqli_num_rows($read) > 0){
               while($row = mysqli_fetch_array($read)){
                  ?>
                     <tr class="space">
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['telp'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td>
                           <a href="update.php?id_pembeli=<?php echo $row['id']; ?>" class="btn update">Update</a>
                           <a href="delete.php?id_pembeli=<?php echo $row['id'];?>" class="btn delete">Delete</a>
                        </td>
                     </tr>
                  <?php
               }
            }
         ?>
      </tbody>
   </table>
</div>