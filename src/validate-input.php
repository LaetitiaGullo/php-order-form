<?php

require "functions.php";

$_SESSION["email"] = ""; 
$_SESSION["street"] = ""; 
$_SESSION["streetnumber"] = ""; 
$_SESSION["city"] = ""; 
$_SESSION["zipcode"] = "";
$email_err = $street_err = $streetnumber_err = $city_err = $zipcode_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputs = ["email", "street", "streetnumber", "city", "zipcode"];


    foreach ($inputs as $key){

        switch ($key) {
            case 'email':
                if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                    $email_err = "Invalid $key";
                    $error = true;
                } else {
                    $email = test_input($_POST["email"]);
                }
                break;
            case 'street':
                $street_err = isValid($key);
                break;
            case 'streetnumber':
                $streetnumber_err = isNumber($key);
                break;
            case 'city':
                $city_err = isValid($key);
                break;
            case 'zipcode':
                $zipcode_err = isNumber($key);
                break;            
        }
    }
    $_SESSION["email"] = $_POST["email"]; 
    $_SESSION["street"] = $_POST["street"]; 
    $_SESSION["streetnumber"] = $_POST["streetnumber"]; 
    $_SESSION["city"] = $_POST["city"]; 
    $_SESSION["zipcode"] = $_POST["zipcode"]; 
}
