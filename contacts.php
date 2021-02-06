<?php
if(isset($_REQUEST['vname']))
{
    $vname = $_REQUEST['vname'];
    $email = $_REQUEST['email'];
    $regno = $_REQUEST['regno'];
    $message = $_REQUEST['message'];
    $from = "FRom: $vname<$email>\r\nREturn-path:$email";
    $subject = "Message sent using your contact form";
    $m = mail("jagadeepsai143@gmail.com",$subject,$message,$from);
    if($m)
        echo"<h1>Email sent!";
    else
        echo"Send Failed:".mysql_error();
    echo"&nbsp;&nbsp;&nbsp;<a herf='contacts.php'>[BAck to contacts]</a>";
} ?>

<html>
<head>
    <title>Contacts Page</title>
</head>
<body>
<table>
    <tr><th><h1>this is 17pa1a0514 page Contact us</th></h1></tr>
    <tr><td>
    <form action = "contacts.php" method="POST" enctype = "multipart/form-data">
    <br>your name</br>
    <input type = "text" name = "vname" value = "" size = "30"/><br>
    <br>YOUR email<br>
    <input type = "text" name = "email" value = "" size = "30"/><br>
    <br>registration number<br>
    <input type = "number" name = "regno" value = "" size = "30"/>
    <br>
    YOUr message<br>
    <textarea name = "message" rows = "7" cols= "30"></textarea><br>
    <input type = "submit" value="send email"/>
    </form>
</td></tr>
</table>
</body>
</html>