

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
<!-- pour affichage propre sur mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Import de Bootstrap -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>


<title>Ajouter un enregistrement.</title>
</head>
<body>



    <form method="post" action="insertIntoPersons.php">
<div class="container">
  <div class="container">
    <div class="form-group row">
      <label for="Civilite">Civilité:</label>
      <div class="col-10">
        <select class="form-control" name="selectCivil">
          <option value="" selected></option>
          <option value="Mme.">Mme.</option>
          <option value="Mr." >Mr.</option>
        </select>
    </div>
    </div>

    <div class="form-group row">
      <label for="firstName" class="col-2 col-form-label">First Name:</label>
      <div class="col-10">
        <input class="form-control" type="text" name="first_name" id="firstName">
      </div>
    </div>

     <div class="form-group row">
        <label for="lastName" class="col-2 col-form-label">Last Name:</label>
        <div class="col-10">
          <input class="form-control" name="last_name" id="lastName">
        </div>
      </div>
    <div class="form-group row">
        <label for="emailAddress" class="col-2 col-form-label">Email Address:</label>
            <div class="col-10">
        <input type="text"  class="form-control" name="email" id="emailAddress">
        </div>
      </div>
    <input type="submit" value="Envoyer -> " class="btn btn-primary">
  </form>
</div>
</div>
</body>
</html>