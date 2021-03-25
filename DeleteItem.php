<?php
    include "connection.php";

    $id = $_POST['id'];
    
        $sql = "delete from items where id = '$id'";
         
        $sql1 = "SELECT * from items where id  = '$id'";
        
        $run=mysqli_query($conn,$sql1);
        
        if(mysqli_num_rows($run) == 0)
        {
            echo "<script>alert('--Data is Not present--');";
            echo 'window.location= "DeleteItem.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('--Item is deleted--');";
            echo 'window.location= "DeleteItem.html"';
            echo "</script>";
        }
         
        else
            echo "<script>alert('error');";
            echo 'window.location= "DeleteItem.html"';
            echo "</script>";
         
            
        $conn->close();
     
        else
        {
            echo "<script>alert('One of the fields most be filled');";
            echo 'window.location= "DeleteItem.html"';
            echo "</script>";
            die();
        }
    
?>