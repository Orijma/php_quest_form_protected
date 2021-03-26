<?php 

$message = "Merci " . $_POST['prenom'] ." " . $_POST['name'] . " de nous avoir contacté à propos de " . $_POST['selectSujet'] .  " . </br> Un de nos conseiller vous contactera soit à l’adresse ". $_POST['email'] . " ou par téléphone au " .  $_POST['phone'] . " dans les plus brefs délais pour traiter votre demande :  </br>" . $_POST['message'];

/*
* This function tests if the data sent is protected.
*/
function test_input($data)
{

    $data= trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

$email = test_input($_POST['email']);


if (filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo $message;

}else{

    echo "Invalid email format";
}




?>