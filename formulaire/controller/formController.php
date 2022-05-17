<?php
// HERE IS THE PHP SOURCE CODE USED TO DETERMINE HOW TO MANAGE DATA FROM THE MAIN FORM

require('../model/formModel.php');

try
{
    $fullname = $_POST['fullname'];
    $datebirth = $_POST['datebirth'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $streetname = $_POST['streetname'];
    $streetnumber = $_POST['streetnumber'];
    $cityname = $_POST['cityname'];
    $postalcode = $_POST['postalcode'];

    // TODO
    
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    echo($errorMessage);
}