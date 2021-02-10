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
    <table border="1">
	<h1>--------------Home--------------</h1>
	<a href="insert_form.php">Add_Data</a>
	<tr>
	    <td>Id</td>
	    <td>name</td>
	    <td>Lastname</td>
	    <td>bd</td>
	</tr>
<?php

$sql="SELECT id, firstname, lastname, email FROM Myguests";
$result =$conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>

	<tr>
	    <td><?php echo $row["id"];?></td>
	    <td><?php echo $row["name"];?></td>
	    <td><?php echo $row["lastname"];?></td>
	    <td><?php echo $row["bd"];?></td>
	    <td><a href="edit.php?id=<?php echo $row["id"];?>">edit</a>
	    <td><a href="delete.php?id=<?php echo $row["id"];?>">delete</a>
	</tr>
<?php
    }
}else{
    echo "";
}

$conn->close();
?>
    </table>
</body>