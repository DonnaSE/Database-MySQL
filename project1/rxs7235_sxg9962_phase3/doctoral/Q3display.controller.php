//suyash Ghimire ID-1001529962
//Donna Safaddin ID- 1001417235



<?php

$host="localhost:3356";
$dbusername="root";
$dbpassword ="";
$dbname ="DOCTORAL";


$conn=new PDO('mysql:host='.$host.';dbname='.$dbname,$dbusername,$dbpassword);


if(!$conn){
  die("Connection failed");
  
}
else{
$StudentId =filter_input(INPUT_POST,'StudentId');

if($query = "SELECT g.SectionId, section.CourseID,g.StudentId,course.CName FROM gta as g, section,course where g.StudentId=:StudentId and g.SectionId=section.SectionId and section.CourseID=course.CourseID ")
{
 if($query == null){
   die();
 }
  else{
  $stmt =$conn->prepare($query);
  $stmt->execute(array(':StudentId' => $StudentId));
  $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

}
}

}


 ?>

<html lang = "en">
<head>
</head>
<body>
<a href="homepage.html"> Click Here to return to the homepage</a>
  <?php
      foreach ($rows as $row){
		echo'</br>';
        echo "Student ID:"; echo"\r"; echo"\r"; echo $row["StudentId"];
        echo'</br>';
        echo "CourseID:"; echo"\r"; echo"\r"; echo $row["CourseID"];
        echo'</br>';
        echo "SectionId:"; echo"\r"; echo"\r"; echo $row["SectionId"];
        echo'</br>';
        echo "Coursename:"; echo"\r"; echo"\r"; echo $row["CName"];
        echo'</br>';
		
        
      }
    ?>

  </body>
  </html>
