<?php

include("dbConnection.php");
if(isset($_POST['submit'])){
    $dis = $_POST['dis'];
   $img = $_FILES['img']['name'];
   $simg = $_FILES['img']['tmp_name'];
   move_uploaded_file($simg, "img/" . $img);
     $query = "INSERT INTO `tbl_advertisement`(`img_id`, `img_name`, `item_discount`) VALUES
      ('6','$img','$dis') ";
      $run = mysqli_query($con,$query) or die("cen not uploaded the .".mysqli_error($con));
      if($run){
          echo "uploaded";
      }else{
          echo "not uploaded";
      }
    

}else{
    echo "not clicked";
}





// $img = $_FILES['img']['name'];
        // $simg = $_FILES['img']['tmp_name'];
        // move_uploaded_file($simg, "pics/" . $img);



?>