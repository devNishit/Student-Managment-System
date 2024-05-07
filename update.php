<?php 

include "connection.php";

$id=$_GET['uid'];

$sql="SELECT * FROM STUDENT WHERE sid=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$tname=$row['sname'];
$tgender=$row['sgender'];
$tbirth=$row['sbirth'];
$tfather=$row['sfather'];
$tmother=$row['smother'];
$tcontact=$row['scontact'];


extract($_REQUEST);

if(isset($_POST['submit']))
{
  


$sql = "UPDATE STUDENT SET sname='$sname', sgender='$gender', sbirth='$sbirth', sfather='$sfather', smother='$smother',scontact='$scontact' WHERE sid='$id'";
$result=mysqli_query($conn,$sql);

if($result)
{
    header("location:home.php");
}
}

?>

<html><head>

<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> <form method="post"> <div align="center" > 
<H1 style="margin:30px;"> Update Student Data </H1>
<table style="margin:10px;">


<tr>
    <td> Student Name: </td>
    <td> <input type="text" name="sname" value="<?php echo $tname; ?>" required> </td>
</tr>

<tr>
<td>Student Gender:</td> <td>

<input type="radio" value="Male" name="gender"
    <?php 
        if ($tgender=="Male"){
        echo "checked"; }
    ?>
> Male
<input type="radio" value="Female" name="gender"
<?php 
        if ($tgender=="Female"){
        echo "checked";}
    ?>
> Female

</td>
</tr>

<tr>
<td> Student Birth Date: </td>
<td> <input type="date" name="sbirth" value="<?php echo $tbirth; ?>" required> </td>
</tr>

<tr>
<td> Student Father Name: </td>
<td> <input type="text" name="sfather" value="<?php echo $tfather; ?>" required> </td>
</tr>

<tr>
<td>Student Mother:</td>
<td> <input type="text" name="smother" value="<?php echo $tmother; ?>" required></td> 
</tr>

<tr>
<td>Student Contact No:</td>
<td> <input type="text" name="scontact" value="<?php echo $tcontact; ?>" required> </td>
</tr>

<tr align="center" > <td>
<button type="submit" id="submit" name="submit" style=" margin:10px; margin-left:100px; background-color: blue; color: white; font-size: 15px; "> <a>Update</a> </button>
</td> </tr>

</table>

</div></form> </body>
</html>