<?php
$name=$_REQUEST["fname"];
if(empty($name)){
    echo"<br>Your first name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>First name should be more than 4 characters";
}
else
{
    echo"<br>Your first name is ".$name;
}
$name=$_REQUEST["lname"];
if(empty($name))
{
    echo"<br>Your last name should not be empty";
}
else if(strlen($name)<4)
{
    echo "<br>last name should be more than 4 characters";
}
else
{
    echo"<br>Your last name is ".$name;
}

if(isset($_REQUEST["designation"]))
{
    $designation=$_REQUEST["designation"];
    echo "<br>Your designation is ".$designation;
}
else
{
    echo "<br>You must select designation";
}

if(isset($_REQUEST["java"]) || isset($_REQUEST["php"]) || isset($_REQUEST["c++"]))
{
    if(isset($_REQUEST["java"]) && isset($_REQUEST["php"]) && isset($_REQUEST["c++"]) )
    {
        echo "<br> You have selected ".$_REQUEST["java"]." and ".$_REQUEST["php"]." and ".$_REQUEST["c++"];
    }
    else if(isset($_REQUEST["java"]) && isset($_REQUEST["php"]))
    {
        echo "<br> You have selected ".$_REQUEST["java"]." and ".$_REQUEST["php"];
    }
    else if(isset($_REQUEST["php"]) && isset($_REQUEST["c++"]))
    {
        echo "<br> You have selected ".$_REQUEST["php"]." and ".$_REQUEST["c++"];
    }
    else if(isset($_REQUEST["java"]) && isset($_REQUEST["c++"]))
    {
        echo "<br> You have selected ".$_REQUEST["java"]." and ".$_REQUEST["c++"];
    }
    else if(isset($_REQUEST["java"]))
    {
        echo "<br> You have selected ".$_REQUEST["java"];
    }
    else if(isset($_REQUEST["php"]))
    {
        echo "<br> You have selected ".$_REQUEST["php"];
    }
    else
    {
        echo "<br> You have selected ".$_REQUEST["c++"];
    }
}
else{
    echo "<br>You must select preferred language";
}
$email=$_REQUEST["email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    echo "<br>you must enter a valid email";
}
else
{
    echo "<br>your email is ".$email;
}

if(is_numeric($_REQUEST["password"])>=1){
    echo "<br>Your password is valid";
}
else
{
    echo "<br>Your password must contain 1 numerical value";
}

?>