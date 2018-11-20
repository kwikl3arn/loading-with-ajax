<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border='1' >
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
</tr>
        <?php
        include ("dbconn.php");
        
    $mysqldb="select * from emp ";  
$result = mysqli_query($conn,$mysqldb);

 while($row = mysqli_fetch_assoc($result)) 
        {
        
 ?>
       <tr>
   <td> <?php echo $row['id']; ?> </td>
   <td> <?php echo $row['name'];?>  </td>
  <td> <?php echo $row['email']; ?> </td>
   
        <?php
//header("Content-type: application/octet-stream"); 
//header("Content-Disposition: attachment; filename=User_Detail.xls"); 
//header("Pragma: no-cache"); 
//header("Expires: 0");
          

        }
        

        ?>
   
        
    </body>
</html>
