<?php
include_once('config3.php');

$result=mysqli_query($mysqli,"select* from users order by pname asc")
?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        table{
            border-collapse:collapse;
            background-color:lightgreen;
            width:30%;
            height:50%;
            margin-left:35%;
        }
         table td{
             background-color:wheat;
         }
           
    </style>
    
</head>
 
<body style="background-color:lightpink">
    <h1 style="text-align:center;color:blue"><u>USERS LOGIN DETAILS</u></h1>
   
    <table border="2" width="400">
        <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>PhoneNo</th>
        <th>Gender</th>
    
     
         
    </tr>
     
    
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['pname'].'</td>';
     echo '<td>' .$res['ppass'].'</td>';
     echo '<td>' .$res['email'].'</td>';
     echo '<td>' .$res['phoneno'].'</td>';
     
     echo '<td>' .$res['gender'].'</td>';
     
     
     
    }
    

?>
 
 
</table>

</body>
</html>