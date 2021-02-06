<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM catalogue");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" href="catalog.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Book name</td>
    <td>Author</td>
    <td>edition</td>
    <td>Price</td>
    <td>Quantity</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["bname"]; ?></td>
    <td><?php echo $row["auth"]; ?></td>
    <td><?php echo $row["edi"]; ?></td>
    <td><?php echo $row["cost"]; ?></td>
    <td><?php echo $row["qty"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>