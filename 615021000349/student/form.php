    <!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "web";
$password = "1234";
$dbname = "student";
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error)   {
    die("Connect failed: " . $conn->connect_error);
}
?>

<form action="insert.php" method="post">
  <fieldset>
    <legend>My Page</legend>
    Name:<br>
    <input type="text" name="firstname">
    <br>
    Lastname:<br>
    <input type="text" name="lastname">
    <br>
    <br>
    <tr>
    <p>
          <button type="submit">Login</button>
          &nbsp;&nbsp;
          <a  location.href = "http://localhost/student/insert.php"></a>
          <button type="reset">Reset</button>
          <br>
        </p>
  </fieldset>
</form>

</body>
</html>