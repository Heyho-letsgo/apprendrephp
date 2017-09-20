

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>


<title>Ajouter un enregistrement.</title>
</head>
<body>
<form method="post" action="insertIntoPersons.php">

<p>
<select name="selectCivil">
  <option value="" selected></option>
  <option value="Mr." >Mr.</option>
  <option value="Mme.">Mme.</option>
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
    <input type="submit" value="Envoyer">
</form>
</body>
</html>