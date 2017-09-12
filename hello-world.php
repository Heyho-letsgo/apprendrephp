<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>

</head>
<html><body>
<?php
/* A simple web site in Cloud9 that runs through Apache
 Press the 'Run' button on the top to start the web server,
 then click the URL that is emitted to the Output tab of the console
*/
echo '<strong>éllo world from Cloud9!</strrong>';

?>
<?php
define('TEMPERATEURE8EBULITIONEAU',100);
echo'<br>';
//Affichage de la valeur
echo 'l\'eau bout à ', TEMPERATEURE8EBULITIONEAU, ' C°';

echo'<br>';

define('FORMULEEAU','H20');


echo 'Formule chimique de l\'eau : ', FORMULEEAU ;
?>

<br>
<?php

 $cours = array ('physique','chimie','informatique','philosophy');
  
echo '<pre>';
print_r ($cours) ;
echo '<pre>';    


?>


<br>

<?php

$prenom = 'Hugo';
echo $prenom;

$pnom = 'z';
echo $pnom;


echo isset($prenom);
echo empty($prenom);

?>


<?php


$legumes = array('carotte','poivron','aubergine','chou');
$legumes [] = 'Salade';
$legumes[12] = ('endive');
$legumes[20] = ('Piment');


print_r($legumes);


echo isset($legumes);

echo '<br>Légume à l\'indice 2 :'.$legumes[2];
echo '<br>Current PHP version: ' . phpversion().'<br>';
  
  
  foreach($legumes as $cle => $valeur) {
 
    echo $cle .':'. $valeur ,'<br/>';
  }

echo 'Count : '. count($legumes).'<br><br>';
print_r($legumes);
$legumes = array('carotte','poivron','aubergine','chou','Salade');


sort($legumes);


foreach ($legumes as $legume) {
    
    echo $legume ."\n";
}


?>


</body>
</html>

