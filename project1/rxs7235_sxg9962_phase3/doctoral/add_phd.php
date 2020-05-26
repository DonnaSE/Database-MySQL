//Suyash Ghimire ID-1001529962
//Donna Safaddin ID- 1001417235



<html>
<head>
<title> Entering New Instructor QUery 1 </title>
At first you will enter the PhD student who hasn't passed any milestone and later delete it
</head> 
<body>
<form method="post" action="add_phd.controller.php">
  <fieldset>
    <legend> Query 1 New Phd </legend>
    <label StudentId="label" for="StudentId"> Student Id </label>
    <input type="text" name="StudentId" placeholder= "Enter Student id" >
    </br>
   <label fname="label" for="firstname"> First name</label>
    <input type="text" name="Fname" placeholder=" Enter Student first name" >
	
    <label lname="label" for="lastname"> Last Name</label>
    <input type="text" name="Lname" placeholder=" Enter Student lastname" >
    </br>
    <label StSem="label" for="StSem"> StSem </label>
    <input type="text" name="StSem" placeholder="Enter Starting Semester" >
    </br>
	<label StYear="label" for="StYear"> StYear </label>
    <input type="text" name="StYear" placeholder="Enter Starting Year" >
    </br>
    <label Supervisor="label" for="Supervisor"> Supervisor </label>
    <input type="text" name="Supervisor" placeholder="Enter Supervisor Name" >
    </br>
    
  <input id="button" type="submit" name="submit">
  </fieldset>
  </body>
  </html>
