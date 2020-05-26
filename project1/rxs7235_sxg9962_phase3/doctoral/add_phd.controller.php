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
$StudentId =filter_input(INPUT_POST,'StudentId');
$Fname =filter_input(INPUT_POST,'Fname');
$Lname =filter_input(INPUT_POST,'Lname');
$StSem =filter_input(INPUT_POST,'StSem');
$Supervisor =filter_input(INPUT_POST,'Supervisor');
$StYear =filter_input(INPUT_POST,'StYear');



$query="INSERT INTO phdstudent(StudentId,FName,LName,StSem,StYear,Supervisor)
values('$StudentId','$Fname','$Lname','$StSem','$StYear','$Supervisor')";

$query1="INSERT INTO selfsupport(StudentId)
values('$StudentId')";



if($conn->query($query))
{
	echo'</br>';
  echo " New record is inserted successfully into the PhDstudent table!\n";
  

if($conn->query($query1))
	{
		echo'</br>';
	  echo " PhD Student successfully added to the Self Support!\n";
	
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
<?php include 'Delete.php';?>
<a href="homepage.html"> Click Here to return to the homepage</a>
</body>
</html>
	
	