<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
table{
    border: radius 4px;
    border-collapse:collapse;
}
th,tr,td{
    padding:10px;
}

    </style>

</head>
<body bgcolor="pink"><center>
<center>
    <table border="1">
        <tr>
        <th>productid</th>
        <th>productname</th>
        <th>quantity</th>
        <th>price</th>
        <th>contact</th>
        <th>address</th>
       
</tr>

<tbody>
   <?php
   $db = mysqli_connect("localhost","root","","kaviproject");
$query = mysqli_query($db,"SELECT * FROM product");
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>".$row['productid']."</td>";
    echo "<td>".$row['productname']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['contact']."</td>";
    echo "<td>".$row['address']."</td>";
}
   ?>
</tbody>
    </table>
</center>
<br>
    <br>
    <center><button style="padding:20px;background-color:yellow"><a href="admin.php" style="text-decoration:none;color:green;">back</a></button></center>

</body>
</html>