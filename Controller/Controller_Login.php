<?php
if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email= $_POST['email'];
    $password= $_POST['password'];
    if($email == "fabiola.chavarria@ulatina.cr" && $password == "1234")
    {
        include 'View/publiacaciones.php';
    }
}
