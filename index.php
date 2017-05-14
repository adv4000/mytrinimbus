<html>
<head>
<style>
body { background-color: green }
</style>
</head>
<body>
<center>
<h1>Hello From DevOps WebPage!</h1>
</center>

<?php
$username = "mymossad";
$password = "mymossad";
$hostname = "mymossad.chntrgvaknsf.ca-central-1.rds.amazonaws.com:3306";
$dbname = "mymossad";

// Connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>";
// Select Database to work with
$selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again.");

echo '<p style="color: red; text-align: center">
      Hellow From DevOps WebServer!
      </p>';

$sql="SELECT Name, Email FROM employee";     # My SQL Query to get all Rows
$results=mysql_query($sql, $dbhandle);      # Results will be saved here
$num_rows=mysql_num_rows($results);

if($num_rows > 0) {
        while($myrow=mysql_fetch_array($results)) {
         echo $myrow[1]." ".$myrow[2];
         echo "<br>";
        }
}
mysql_close($dbhandle);
?>
</body>
</html>

