<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $database = 'db';
    $dbport = 3306;
    $link = mysqli_connect($servername, $username, $password, $database);
    $link->set_charset('utf8');
// Check connection
if ($link === false) {
    die('ERROR: Could not connect. '.mysqli_connect_error());
}

// Escape user inputs for security

$civil = isset($_POST['selectCivil']) ? true : false; //toujours basé sur l'attribut name du select
if ($civil) {
    $value = htmlentities($_POST['selectCivil'], ENT_QUOTES, 'UTF-8'); //permet de protéger tout les caractères spéciaux
   //ensuite requête pour ajouter en base ...
} else {
    echo 'Select Civil is required';
    exit;
}

$civil = mysqli_real_escape_string($link, $_REQUEST['selectCivil']);

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email,civil) VALUES ('$first_name', '$last_name', '$email','$civil')";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully. <br>
    ___________________<a href='form.php' rel='nofollow'>retour</a>";
} else {
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);

    include 'modal.html';
}

    // close connection
mysqli_close($link);
