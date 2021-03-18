<html>
<center>

<body bgcolor="yellow">

<br>

<?php


$name=["Virat kohli","Rohit sharma","shikar Dhawan","MS Dhoni","Rishab pant","Hardik pandya","R jadeja","KL Rahul","B kumar","J Bhumrha","Devaduth Padikkal"];



echo "<h4> <u><b>CRICKET TEAM PLAYERERS NAME</b></u></h4>
<table border='1px'>
 <tr><th class='h' >Sl No</th>
<th class='h'>NAME</th>
</tr>";

for($i=0;$i<11;$i++)

{

$sl=$i+1;

echo " <tr><th>$sl</th><th>$name[$i]</th></tr>";

}

echo "</table>";

?>

</body>

