<html><head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 
    
<form method="post"> <div align="center" > 
<H1 id="indexh1" style="text-color:red"> Student Managment System </H1>
<H1 style="margin:30px;"> Login </H1>
<table id="indextbl" style="margin:10px;">
<tr> 
    <td>Enter User Name </td>
    <td> <input type="text" name="uname"> </td>

</tr>

<tr>
    <td> Enter Password </td>
    <td> <input type="password" name="pass"> </td>
</tr>

<tr align="center" > <td>
<button type="submit" id="submit" name="submit" style=" margin:10px; margin-left:100px; background-color: red; color: white; font-size: 15px; "> <a>Login <a/></button>
</td> </tr>

</table>

</div></form> </body>

</html>


<?php 
    if(isset($_POST['uname'])&& isset($_POST['pass']))
{
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

    if($uname=="admin" && $pass="admin")
{
    header("Location:home.php");
}
else{
    echo "wrong username or Password";
}
}
?>