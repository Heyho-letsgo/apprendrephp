

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>


<title>Add Record Form</title>
</head>
<body>
<form method="post" action="insert.php">
    
<p>    
<select name="selectCivil">
  <option value=""></option> 
  <option value="6" selected>Mr.</option>
  <option value="8">Mme.</option>
</select>
   </p> 
    
    

    <p>
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>