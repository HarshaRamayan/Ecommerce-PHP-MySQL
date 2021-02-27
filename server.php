<?php

$mysqliObject = new mysqli("localhost", "root", "", "php project");

$email = $_REQUEST["Email"];
$password = $_REQUEST["Password"];
$operation = $_REQUEST["Operation"];

if($operation == 'signup'){

        $name = $_REQUEST["Name"];       
        $phone = $_REQUEST["Phone"];
        $mysqliObject->query("Insert into users(name, email, phone, password) values('$name', '$email', '$phone', '$password')");
        if($mysqliObject->affected_rows){
            echo "Registration done successfully";
        }
}else if($operation == 'login'){

        $loginData = $mysqliObject->query("select * from users where email= '$email'");

        $resultData = $loginData->fetch_assoc();

        echo $mysqliObject->error;
        //echo $resultData["password"];

        if($password == $resultData["password"]){
            
          echo  "Login successful";
        }else{
            echo "Password incorrect";
        }

}

?>