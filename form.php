

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>


<title>Ajouter un enregistrement.</title>
</head>
<body>
<form method="post" action="insert.php">

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