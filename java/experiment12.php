
 <html>
 <head>
  <title>form</title>
 

 </head>
<center>
<body bgcolor="yellow">


<br>
<br>
<h3 style="color:darkgreen;font-size:30px"><u>REGISTRATION FORM</u></h3>
<form action='' method="POST">
<table>
 <tr>
  <td> NAME</td>
  <td> <input type="text" id="fname" name="fname"></td>
 </tr>

 <tr>
  <td> GENDER</td>
  <td> <input type="radio" id="gen_m" value='female' name="gen">female<input type="radio" value='male' id="gen_f" name="gen">male</td>
 </tr>
 
<tr>
  <td> USER NAME</td>
  <td><input type="text" id="uname" name="uname"> </td>
 </tr>
<tr>
  <td> PASSWORD</td>
  <td> <input type="password" id="pass"  name="pass"></td>
 </tr>

<tr>
  <td>EMAIL </td>
  <td> <input type="email" id="mail"  name="email"></td>
 </tr>
<tr>
  <td> MOBILE NO</td>
  <td> <input type="phone" id="tel"  name="phone"></td>
 </tr>
<tr>
  <td>CITY</td>
  <td><select name="district" id="di"  name="dictrict">
  <option value="ernakulam">ernakulam</option>
  <option value="kozhikode">kozhikode</option>
  <option value="kannur">kannur</option>
  <option value="malapuram">Malapuram</option>
</select>
  </td>
 </tr>
</table>
<br>
<input type="submit" value="register" name="submit" style="background:green;color:white">


</form>

<?php



if(isset($_POST["submit"]))
{
$fname=$_POST["fname"];
    if($fname==NULL)
    {
        echo "  <b>Name can not be Empty</b>" ;
        exit;
    }
    else
    {
        if (!preg_match("/^[a-zA-z]*$/", $fname))
        {
        echo "<b>Only characters and white space allowed in names </b>";
        exit;
        }
    }


    if(!isset($_POST["gen"]))
    {
    echo " <b>Please select a gender</b> ";
    exit;
    }
$uname=$_POST["uname"];
if($uname==NULL)
{
    echo "<b> user name can not be Empty </b>";
    exit;
}
else
{
    if(!preg_match("/^[a-zA-z]*$/", $uname)) 
    {
    echo "<b> Username only contain characters</b> ";
    exit;
    }
}
$pass=$_POST["pass"];
if($pass==NULL)
{
    echo " <b>Password cannot be empty</b>  ";
    exit;
}
else
{
    if(strlen($pass)<8)
    {
    echo " <b> Password must cotain atleast 8 characters</b> ";
    exit;
    }
}
$cpa=$_POST["cpa"];
if($pass!=$cpa)
{
    echo "  <b>confirm password incorrect</b>  ";
    exit;
}

$mail=$_POST["email"];
if($mail==NULL)
{
    echo " <b>Email must not empty</b>  ";
    exit;
}
else{
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
    {
        echo " <b> Email must be valid </b>";
        exit;
    }
}
$phone=$_POST["phone"];
if($phone==NULL)
{
    echo "  <b>Phone number must not be empty </b> ";
    exit;
}

echo " <b><u> Registration sucessfully complteted....</u></b> ";

echo "<br><br><br>";
echo " Name\t:$fname <br> ";
echo " username\t:$uname <br>";
echo "mail\t: $mail<br>";
echo "phone\t: $phone";
}
?>

</body>
</html>