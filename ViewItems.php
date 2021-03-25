<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
            width: 100%;
            color: #973030;
            font-family: serif;
            font-size: 30px;
            text-align: left;
        }
        th{
            background: #973030;
            color: white;
        }
        
        button
        {
            height:35px;
            background: #973030;
            border:none;
            color:#d3d3d3;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 20px;
        }
        
        button:hover, button:focus {
        background:#DD7261;
        color: #882B1D;
        }
    </style>
</head>
<body>
    <form class="back" method="get" action="main.html">
                <button type="submit">Back</button>
            </form>
<table>
<tr>

<th>ID</th>
<th>Name</th>
<th>type</th>
<th>Amount</th>

</tr>

    
    
    <?php
        
        $conn=mysqli_connect("localhost","root","","sms") or die("Failed to connect to MySQL: " . mysqli_error());
    
    $sql = "SELECT id,name, type, amount FROM items";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>". $row["type"]. "</td><td>" . $row["amount"]. "</td></tr>";
    }
        
    
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    
    

</body>
</html>








