<?php
class mydb {
    function opencon()
    {
$dbservername="localhost";
$dbusername="root";
$password="";
$dbname="labtask";
$conn = new mysqli($dbservername, $dbusername, $password, $dbname);
if($conn->connect_error)
{
    echo "con obj failed";
}
return $conn;
    }
    function insertuser($conn, $tablename, $fname, $lname, $age, $designation, $planguage, $email, $password, $file)
    {

$sqlstr="INSERT INTO $tablename(fname, lname, age, designation, planguage, email, password, picture) VALUES ('$fname' , '$lname' , '$age' , '$designation' , '$planguage' , '$email' , '$password' , '$file')";
if($conn->query($sqlstr))
{
    echo "data inserted";
}
else 
{
    echo "data not inserted".$conn->error;
}
    }
    function connclose(){
$conn->close();
    }
}
    if(isset($_POST["submit"]))
{
$mydb = new mydb();
   $conobj = $mydb->opencon();
   $mydb->insertuser($conobj,"employee",$_POST['firstname'],$_POST['lastname'],$_POST['age'],$_POST['designation'],$_POST['language'],$_POST['email'],$_POST['password'],$_POST["file"]);
}

?>
