
<?php
    include "connection.php";
    
        $id = $_POST['id'];
        $newamount = $_POST['amount'];  
        $sql = "SELECT id from items where id = '$id'";

        $run=mysqli_query($conn,$sql);

        if(mysqli_num_rows($run) == 0)
        {
            echo "<script>alert('--Data is Not present--');";
            echo 'window.location= "UpdateItem.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE)
        {
           
            $sql1 = "UPDATE items SET amount = '$newamount' WHERE id = '$id'";
            $run=mysqli_query($conn,$sql1);
            echo "<script>alert('--Amount is Updated !--');";
            echo 'window.location= "main.html"';
            echo "</script>";     
        }  
        else
            echo "<script>alert('error');";
            echo 'window.location= "UpdateItem.html"';
            echo "</script>";
            
        $conn->close();
    
?>

