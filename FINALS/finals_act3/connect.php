<?php
// database name  and properties  (uname,pword)
$con = mysqli_connect('localhost','root','','intprog_db');
//CHECKING OF DB CONNECTION
if (mysqli_connect_errno()){
    echo "Failed to connect to Mysql Server". 
    mysqli_connect_errno();
}else {
   // echo " Succefully connected to MySQL DB!";
}

?>
