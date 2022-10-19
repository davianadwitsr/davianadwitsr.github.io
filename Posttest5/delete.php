<?php 
   include('database.php');

   if(isset($_GET['id_pembeli'])){
      $delete = mysqli_query($conn, "DELETE FROM pembeli WHERE id= '".$_GET['id_pembeli']."'");

      if($delete){
         ?>
            <script>
            alert("data berhasil dihapus");
            window.location=('read.php');
            </script>
         <?php
      }
   }
?>
