<html>
    <head>
        <title>My Home</title>
</head>
<body>
    <h1>Registration Form</h1>
   
    <form action="../model/db.php" method="post">
        <table>
            <tr>
       <tr><td> First Name </td>
       <td><input type="text" name="firstname"></td></tr>
       <tr><td> Last Name</td>
       <td><input type="text" name="lastname" ></td></tr>
       <tr><td> Age</td>
       <td><input type="number" name="age"></td></tr>    
       <tr><td> Designation</td>
        <td><input type="radio" name="designation" value="Junior Programmer">Junior Programmer
    <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
        <td><input type="radio" name="designation" value="Project Lead">Project Lead</td></tr>
        <tr><td> Preferred Language</td>
        <td><input type="radio" name="language" value="JAVA">JAVA
        <input type="radio" name="language" value="PHP">PHP
        <input type="radio" name="language" value="C++">C++</td></tr>

    <tr><td> E-mail </td>
       <td><input type="email" name="email" ></td></tr>
        <tr><td>Enter your password</td><td> <input  type="password" name="password"></td></tr>
        <tr><td>Please choose a file<input type="file" name="file" value="Choose File"></td></tr>
        <tr><td><input type="submit" name="submit" value="Submit">
        <input type="submit" name="submit" value="Reset"></td></tr>

</table>
</form>
</body>
</html>