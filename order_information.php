<?php
include_once "connection.php";
if(isset($_POST["submit"])){
    $name = $_POST ["name"];
    $product = $_POST ["product"];
    $size = $_POST ["size"];
    $houseNo = $_POST ["houseNo"];
    $roadNo = $_POST ["roadNo"];
    $thana =$_POST ["thana"];
    $division = $_POST ["dividion"];
    $postalCode = $_POST ["postalCode"];
    $phone = $_POST ["phone"];
    $mail = $_POST ["mail"];


    $sql="Insert into order_information(full_name,product_code,size,house_no,road_no,thana,division,postal_code,phone,mail) values('$name','$product','$size','$houseNo','$roadNo','$thana','$division','$postalCode','$phone','$mail')";
  if(mysqli_query($connect_mysql,$sql)){
    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Thank You For Your Order !!!!!!!!!!!!!!!!!!!!!<br>
            !!!!!!!!!!!!!!!!!!!!!!!!!!!!!Stay With Us!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
            
  }else{
    echo "error: ". mysqli_error($connect_mysql);
  }
}

?>