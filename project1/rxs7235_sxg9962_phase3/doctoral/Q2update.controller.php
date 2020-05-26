#suyash Ghimire ID-1001529962
#Donna Safaddin ID- 1001417235


<?php
echo'</br>';
$host="localhost:3356";
$dbusername="root";
$dbpassword ="";
$dbname ="DOCTORAL";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);


if(mysqli_connect_error()){
  die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
 
}
else{
$StudentName =filter_input(INPUT_POST,'StudentName');
$fname=filter_input(INPUT_POST,'fname');
$lname=filter_input(INPUT_POST,'lname');


$query = "SELECT p.Fname from phdstudent AS p, gra as g WHERE p.FName='$StudentName' and g.StudentId=p.StudentId";
if($conn->query($query)){
  echo "The student is Valid GRA student\n";
  $query="UPDATE phdstudent SET Fname='$fname',Lname ='$lname' where fname='$StudentName'";
	if($conn->query($query)){
		echo "The entry updated successfully\n";
}
}
else{
  echo "Please enter a valid student name who is a GRA";
}

}


 ?>
 <html lang = "en">
<head>
</head>
<body>
<a href="homepage.html"> Click Here to return to the homepage</a>
</body>
</html>
	
