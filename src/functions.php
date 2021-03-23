<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function isValid($key) {
    if(empty($_POST[$key])) {
        return "Invalid $key";
    } else {
    }
}

function isNumber($key) {
    if(!is_numeric($_POST[$key])){
        return "Invalid $key";
    } else {
    }
}

function printError($message) {
    if($message != "") {
        return "<li>$message</li>";
    }
}