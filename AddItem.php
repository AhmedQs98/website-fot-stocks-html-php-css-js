<?php
    include "connection.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];//item type
    $amount = $_POST['amount']; // item amount
       
    
        $sql = "INSERT INTO items VALUES('$id','$name','$type','$amount')";
        $sql1 = "SELECT * from items where id  = '$id'";
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run)>0)
        {
            echo "<script>alert('Data is Present');";
            echo 'window.location= "AddItem.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('New record inserted');";
            echo 'window.location= "main.html"';
            echo "</script>";
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "AddItem.html"';
            echo "</script>";
            
        $conn->close();   
    
?>