
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>first name</th>
<th>last name</th>
<th>email</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "admin", "admin", "employee");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, course_1, course_2 , course_3, course_4 , percentage FROM student ORDER BY id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["course_1"] . "</td><td>"
. $row["course_2"]. "</td><td>" . $row["course_3"] . $row["course_4"] . "</td><td>" "</td><td>" $row["percentage"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
