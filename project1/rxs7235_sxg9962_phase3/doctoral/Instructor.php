//Suyash Ghimire ID-1001529962
//Donna Safaddin ID- 1001417235


echo'</br>';
<html>
<head>
<title> Entering New Instructor QUery 1 </title>
</head> 
<body>
<form method="post" action="Q1instructor.controller.php">
  <fieldset>
    <legend> Query 1 New Instructor </legend>
    <label InstructorId="label" for="InstructorId"> Instructor Id </label>
    <input type="text" name="InstructorId" placeholder= "Enter Instructor id" >
    </br>
   <label fname="label" for="firstname"> First name</label>
    <input type="text" name="Fname" placeholder=" Enter Instructor first name" >
	
    <label lname="label" for="lastname"> Last Name</label>
    <input type="text" name="Lname" placeholder=" Enter Instructor lastname" >
    </br>
    <label SartDate="label" for="SartDate"> Start Date (YYYY-MM-DD)</label>
    <input type="date" name="SartDate" placeholder=" Enter instructor start date" >
    </br>
    <label Degree="label" for="Degree"> Degree(PhD or Masters)</label>
    <input type="text" name="Degree" placeholder=" Enter your degree" >
    </br>
    <label Rank="label" for="Rank">Rank</label>
    <input type="text" name="Rank" placeholder=" Enter instructor Rank (Professor , Associate Professor)" >
    </br>
	<label Typo="label" for="Type">Type</label>
    <input type="text" name="Type" placeholder=" Enter the Type (Either Adjunct , tt or NTT)" >
    </br>
	<label CourseID="label" for="CourseID">CourseId</label>
    <input type="text" name="CourseID" placeholder=" Enter course name you want to add that instructor" >
    </br>
	<label StudentId="label" for="StudentId"> Student ID</label>
    <input type="text" name="StudentId" placeholder=" Enter student ID to add to the committee" >
    </br>
    <input id="button" type="submit" name="submit">
  </fieldset>
  </body>
  </html>
