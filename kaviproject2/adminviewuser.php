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
    <table border="1">
        <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>number</th>
        <th>address</th>
        <th>email</th>
        <th>password_1</th>
        <th>password_2</th>
        <th>feedback</th>
</tr>

<tbody>
   <?php
   $db = mysqli_connect("localhost","root","","kaviproject");
$query = mysqli_query($db,"SELECT * FROM user");
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['number']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['password_1']."</td>";
    echo "<td>".$row['password_2']."</td>";
    echo "<td>".$row['feedback']."</td>";
}
   ?>
</tbody>
    </table></center>
    <br>
    <br>
    <center><button style="padding:20px;background-color:yellow"><a href="admin.php" style="text-decoration:none;color:green;">back</a></button></center>

</body>
</html>