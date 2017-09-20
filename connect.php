<strong>https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php</strong>
<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "db";
    $dbport = 3306;



    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);


    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "https://openclassrooms.com/courses/pour-aller-plus-loin-41/selectionner-une-valeur-ne-provenant-pas-d-une-table <br>";
    echo "Connected successfully (".$db->host_info.")";



        // Attempt create table query execution

$sql = "CREATE IF NOT EXISTS TABLE persons (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        civil VARCHAR(4),
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE
    )";
if(mysqli_query($db, $sql)){
    echo "Table created successfully.";


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}


// Close connection
mysqli_close($db);


 ?>