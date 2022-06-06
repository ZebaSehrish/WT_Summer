<?php
$passwordError="";
if (isset($_REQUEST["submit"]))
{
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
        $language = $_REQUEST["java"]." and ".$_REQUEST["php"]." and ".$_REQUEST["c++"];
    }
    else if(isset($_REQUEST["java"]) && isset($_REQUEST["php"]))
    {
        echo "<br> You have selected ".$_REQUEST["java"]." and ".$_REQUEST["php"];
        $language = $_REQUEST["java"]." and ".$_REQUEST["php"];
    }
    else if(isset($_REQUEST["php"]) && isset($_REQUEST["c++"]))
    {
        echo "<br> You have selected ".$_REQUEST["php"]." and ".$_REQUEST["c++"];
        $language = $_REQUEST["php"]." and ".$_REQUEST["c++"];
    }
    else if(isset($_REQUEST["java"]) && isset($_REQUEST["c++"]))
    {
        echo "<br> You have selected ".$_REQUEST["java"]." and ".$_REQUEST["c++"];
        $language = $_REQUEST["java"]."and".$_REQUEST["c++"];
    }
    else if(isset($_REQUEST["java"]))
    {
        echo "<br> You have selected ".$_REQUEST["java"];
        $language = $_REQUEST["java"];
    }
    else if(isset($_REQUEST["php"]))
    {
        echo "<br> You have selected ".$_REQUEST["php"];
        $language = $_REQUEST["php"];
    }
    else
    {
        echo "<br> You have selected ".$_REQUEST["c++"];
        $language = $_REQUEST["c++"];
    }
}
else{
    echo "<br>You must select preferred language";

}
echo "<br>";

$email=$_REQUEST["email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    echo "you must enter a valid email";
}
else
{
    echo "your email is ".$email;
}

if(is_numeric($_REQUEST["password"])>=1){
    echo "<br>Your password is valid";
}
else
{
    echo "<br>Your password must contain 1 numerical value";
}
$_FILES ["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"] ["tmp_name"],"../uploads/myfile.pdf"))
{
    echo "<br>file uploaded.";
}
else
{
  echo "<br>file not uploaded.";  
}
$mydata = array(
    'fname'=>$_REQUEST["fname"],
    'lname'=>$_REQUEST["lname"],
    'age'=>$_REQUEST["age"],
    'designation'=>$_REQUEST["designation"],
    'language'=>$language,
    'email'=>$_REQUEST["email"],
    'password'=>$_REQUEST["password"],
    'email'=>$_REQUEST["email"],
    'file'=>$_FILES["myfile"]["name"]
    
);
$jsondata=json_encode($mydata, JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsondata))
{
    echo "<br>data saved";
}

}
?>