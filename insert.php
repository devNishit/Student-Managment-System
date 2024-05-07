<?php 

include "connection.php";

$sql="SELECT MAX(sid) AS sid FROM STUDENT";
$result=mysqli_query($conn,$sql);
if($result)
{
    $row=mysqli_fetch_assoc($result);
    $pid=($row['sid'])+1;
}

extract($_REQUEST);
if(isset($_POST['submit']))
{
  


$sql = "INSERT INTO STUDENT VALUES('$sid','$sname','$gender', '$sbirth', '$sfather', '$smother','$scontact')";
$result=mysqli_query($conn,$sql);

if($result)
{
    header("location:home.php");
}
}

?>



<html><head><link rel="stylesheet" type="text/css" href="styles.css"></head>
<body> <form method="post"> <div align="center" > 

<button id="backhome"><a href="home.php">Back</a></button>

<H1> Insert Student Data </H1>
<table >
<tr> 
    <td>Student ID: </td>
    <td> <input type="text" name="sid" readonly value="<?php echo $pid; ?>" > </td>

</tr>

<tr>
    <td> Student Name: </td>
    <td> <input type="text" name="sname" required> </td>
</tr>

<tr>
<td>Student Gender:</td>
<td>         
             <input type="radio" value="Male" name="gender"> Male
             <input type="radio" value="Female" name="gender"> Female
</td>
</tr>

<tr>
<td> Student Birth Date: </td>
<td> <input type="date" name="sbirth" required> </td>
</tr>

<tr>
<td> Student Father Name: </td>
<td> <input type="text" name="sfather" required> </td>
</tr>

<tr>
<td>Student Mother:</td>
<td> <input type="text" name="smother" required></td> 
</tr>

<tr>
<td>Student Contact No:</td>
<td> <input type="text" name="scontact" required> </td>
</tr>

<tr align="center" > <td>
<button type="submit" id="submit" name="submit" style=" margin:10px; margin-left:100px; background-color: blue; color: white; font-size: 15px; "><a> Insert</a> </button>
</td> </tr>

</table>

</div></form> </body>
</html>

