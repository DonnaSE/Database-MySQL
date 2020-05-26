# Donna Safaddin ID# 1001417235
# Suyash Ghimire ID# 1001529962


<?php
$host="localhost:3356";
$dbusername="root";
$dbpassword ="";
$dbname ="DOCTORAL";


$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error())
{
  die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  
}

else
{
  $StudentId = filter_input(INPUT_POST,'StudentId');// define variable

  $query = "SELECT *
            FROM milestornespassed
            WHERE StudentId LIKE '%$StudentId%'";
  #store the query in found
  $found = $conn->query($query);

  if(!$found)
  {
    $query = "DELETE FROM SELFSUPPORT
              WHERE StudentId='$StudentId'";
    #store the query in result
    $result = $conn->query($query);
    $query = "DELETE FROM PhdStudent
              WHERE StudentId = '$StudentId'";
    $result = $conn->query($query);
  }
  $query = "SELECT *
            FROM SELFSUPPORT
            WHERE StudentId like '%$StudentId%'";
	echo'</br>';
	echo'</br>';
	echo " The record successfully deleted\n";
$conn->close();
}
?>
<html lang = "en">
<head>
</head>
<body>
<a href="homepage.html"> Click Here to return to the homepage</a>
</body>
</html>
	
