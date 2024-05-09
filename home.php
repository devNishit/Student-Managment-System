<html><head> 
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> <form method="post">
    <div class="btn">
    <button style='margin:5px; background-color: blue; font-size: 15px;'><a href='insert.php'; style='color: white;'>Add New Student</a></button>
    <input id="serchbyid"type="text" placeholder="Search by Id" name="fid">
    <button id="sbtn" type="submit" style='margin:5px' name="search"><a>Search</a></button>
   
</form></div>
</body></html>


<?php

include 'connection.php';


if(isset($_POST['search']) && !empty($_POST['fid'])){

    $fid=$_POST['fid'];
    $sql = "SELECT * FROM STUDENT WHERE sid=$fid";
    $result=mysqli_query($conn,$sql);

    if($result)
{
    echo "<html><head> 
    
    <H1 style='margin:30px;'> Student Data </H1>
    <button id='bbtn' style='margin:5px' name='back'><a href='home.php'>Back</a></button>

    <div align='center'>
    
    <table border='1px' style='margin:10px;'> 


    <tr >
        <th>ID</th>
        <th>Photo</th>
        <th>Name </th>
        <th>Gender </th>
        <th>Birthday</th>
        <th>Father Name </th>
        <th>Mother Name </th>
        <th>Contact No. </th>

    </tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        $sid=$row['sid'];
        $simg=$row['simg'];
        $sname=$row['sname'];
        $sgender=$row['sgender'];
        $sbirth=$row['sbirth'];
        $sfather=$row['sfather'];
        $smother=$row['smother'];
        $scontact=$row['scontact'];

        echo "<tr> <td>".$sid;
        echo "</td><td><img src='".$simg."' width='50px' height='50px'>";
        echo "</td><td>". $sname;
        echo "</td> <td>".$sgender;
        echo"</td><td>".$sbirth;
        echo"</td><td>" .$sfather;
        echo"</td><td>".$smother;
        echo "</td><td>" . $scontact;
        echo "</td><td> <button style='margin:5px; background-color: blue; font-size: 15px;'><a href='update.php?uid=".$sid."'; style='color: white;'>Update</a></button>";
        echo "</td><td> <button style='margin:5px; background-color: red; font-size: 15px;'><a href='delete.php?did=".$sid."'; style='color: white;'>Delete</a></button>";
        echo"</td></tr>";
        

    } echo "</table></div></body></html>";
}

}

else{


$sql = "SELECT * FROM STUDENT";
$result=mysqli_query($conn,$sql);

if($result)
{
    echo "<html><head> 
    <div align='center'>
    <H1 style='margin:30px;'> Student Data </H1>


    <table border='1px' style='margin:10px;'> 


    <tr >
        <th>ID</th>
        <th>Photo</th>
        <th>Name </th>
        <th>Gender </th>
        <th>Birthday</th>
        <th>Father Name </th>
        <th>Mother Name </th>
        <th>Contact No. </th>

    </tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        $sid=$row['sid'];
        $simg=$row['simg'];
        $sname=$row['sname'];
        $sgender=$row['sgender'];
        $sbirth=$row['sbirth'];
        $sfather=$row['sfather'];
        $smother=$row['smother'];
        $scontact=$row['scontact'];

        echo "<tr> <td>".$sid;
        echo "</td><td><img src='".$simg."' width='50px' height='50px'>";
        echo "</td><td>". $sname;
        echo "</td> <td>".$sgender;
        echo"</td><td>".date('d/m/y',strtotime($sbirth));
        echo"</td><td>" .$sfather;
        echo"</td><td>".$smother;
        echo "</td><td>" . $scontact;
        echo "</td><td> <button style='margin:5px; background-color: blue; font-size: 15px;'><a href='update.php?uid=".$sid."'; style='color: white;'>Update</a></button>";
        echo "</td><td> <button style='margin:5px; background-color: red; font-size: 15px;'><a href='delete.php?did=".$sid."'; style='color: white;'>Delete</a></button>";
        echo"</td></tr>";
        

    } echo "</table></div></body></html>";
}

}

?>