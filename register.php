<?php
    include "connection.php";

    $username = $_POST['name'];
    $password = $_POST['password'];

       
    if(!empty($username) &&!empty($password))
    {
        $sql = "INSERT INTO admins VALUES('$username','$password')";
        $sql1 = "SELECT * from admins where name  = '$username'";
        $run=mysqli_query($conn,$sql1);
        
        if(mysqli_num_rows($run)>0)
        {
            echo "<script>alert('Already A User');";
            echo 'window.location= "register.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('New record inserted');";
            echo 'window.location= "login.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "newaccount.html"';
            echo "</script>";
            
        $conn->close();   
    }
?>