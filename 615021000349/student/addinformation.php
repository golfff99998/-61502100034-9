<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error)   {
    die("Connect failed: " . $conn->connect_error);
}
?>

<form action="insert.php" method="post">
  <fieldset>
    <legend>Personal information:</legend>
    Firstname:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
    BD :<br>
    <input type="text" name="bd">
    <br>
    <tr>
	<input type="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>