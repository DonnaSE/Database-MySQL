#suyash Ghimire ID-1001529962
#Donna Safaddin ID- 1001417235

<?php

echo'</br>';
$host="localhost:3356";
$dbusername="root";
$dbpassword ="";
$dbname ="DOCTORAL";

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
echo'</br>';

if(mysqli_connect_error()){
  die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
 
}

else
{
$InstructorId =filter_input(INPUT_POST,'InstructorId');
$Fname =filter_input(INPUT_POST,'Fname');
$Lname =filter_input(INPUT_POST,'Lname');
$SartDate =filter_input(INPUT_POST,'SartDate');
$Degree =filter_input(INPUT_POST,'Degree');
$Rank =filter_input(INPUT_POST,'Rank');
$Type =filter_input(INPUT_POST,'Type');
$CourseID=filter_input(INPUT_POST,'CourseID');
$StudentId=filter_input(INPUT_POST,'StudentId');

$query="INSERT INTO instructor(InstructorId,FName,LName,SartDate,Degree,Rank,Type)
values('$InstructorId','$Fname','$Lname','$SartDate','$Degree','$Rank','$Type')";

$query1="INSERT INTO coursestaught(CourseID,InstructorId)
values('$CourseID','$InstructorId')";

$query3="INSERT INTO phdcommittee(StudentId,InstructorId) 
values('$StudentId','$InstructorId')";

if($conn->query($query))
{
	echo'</br>';
  echo " New record is inserted successfully into the Instructor table!\n";
  

if($conn->query($query1))
	{
		echo'</br>';
	  echo " Instructor successfully added to the existing course!\n";
	  if($conn->query($query3))
	{
		echo'</br>';
	  echo " Instructor successfully added to the committee  !\n";
	  
	}
	}  

  
}



else{
	echo "Wrong, The Entry already exists";
	


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
	
	