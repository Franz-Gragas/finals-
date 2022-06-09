<?php
//connecting the page using connect.php
require("connect.php");
// this is the viewing of records inside MySQL DB

$result = mysqli_query($con,'SELECT*FROM register');
?>
<html>
    <head>
        <title>Register Accounts</title>
    </head>
    <body>
        <h1>Registered Users</h1>
        <table border="1">
            <!--this is the title of the records-->
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Username</td>
                    <td>Password</td>
                </tr>
            </thead>   
            <!-- these are the records inside MySQL -->
            <?php
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row['register_name']?> </td>
                <td><?php echo $row['register_username']?> </td>
                <td><?php echo $row['register_password']?></td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr> 
            <?php } ?>

         </table>
    </body>
</html>