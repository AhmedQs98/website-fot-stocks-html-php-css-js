
<?php
    include "connection.php";

    $id = $_POST['id'];
         
        $sql1 = "SELECT amount from items where id  = '$id'";
         
        $run=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($run) == 0)
        {
            echo "<script>alert('--Data is Not present--');";
            echo 'window.location= "DeleteItem.html"';
            echo "</script>";
        }
        else if($conn->query($sql) == TRUE){
            echo "<script>alert('--Item is deleted--');";
            echo 'window.location= "EnterUpDate.php"';
            echo "</script>";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc()
                    //echo "<tr><td>" .$row["amount"]. "</td></tr>";
                    session_start();
                    $_SESSION['regName'] = $regValue;
                    
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

