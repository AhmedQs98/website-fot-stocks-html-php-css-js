<html>
<head>
    <link rel="stylesheet" href="EnterUpDate.css"> 
</head>
<body background ="my_background.png">
    <div class="fixed-header">
        <p>YOUR STOCK MANAGER</p>
        <form class="log-out" method="get" action="login.html">
                <button type="submit">Log Out</button>
        </form>
    </div>
    <div class="flex-container">
    <div id="design-box">
    <div class="login-page">
            <h1>Enter The New Values</h1>
            <form  class="back" method="get" action="main.html">
                    <button type="submit">Back</button>
            </form>
        
        
        <?php
            include "connection.php";
            
            $TheAmount = $_SESSION['Amount'];

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
        
        
        
        <div class= "form">
            <form class="branch" action="EnterUpdate.php" method="POST">
                <div class="textname"><br>Update Amount</div>
                <div class='textbox'><input type="text" name="amount" placeholder= <?php session_start(); echo $_SESSION['Amount'];?> / required></br></div>
                <br>
                <button>add</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    <div class="fixed-footer">
        Contact Us  +249 121888374
    </div>
    
    
            


    
</body>
</html>