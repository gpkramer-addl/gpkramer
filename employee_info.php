<?php



$conn = mysqli_connect("db.sice.indiana.edu","i495u20_gpkramer","my+sql=i495u20_gpkramer", "i495u20_gpkramer");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}




$sql="SELECT id, email, first_name, last_name, phone, admin, active FROM employee ";

$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);

if ($result->num_rows > 0) {
  echo "<table>";
		echo "<tr><th>Employee ID</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Admin</th><th>Active</th><th>Actions</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td>";
        echo "<td>".$row["phone"]."</td><td>".$row["admin"]."</td><td>".$row["active"]."</td><td><button class=\"editButton\" data-id=\"{$row["id"]}\">Edit</button><button class=\"deleteButton\" data-id=\"{$row["id"]}\">Delete</button></td></tr>";
    }
  echo "</table>";
?>
