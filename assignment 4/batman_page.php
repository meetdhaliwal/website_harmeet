<style>.table ,th,td {
	
	border: 8px solid pink;
}

</style>

<html>
<head>
<body>
<button type= "button" onclick="window.location.href = 'homepage.html'">home</button> 

<table class="table">
<tr>
<tr>
<th>Seller Name</th>
<th>Address</th>
<th>City</th>
<th>phone number</th>
<th>email</th>
<th>Model</th>
<th>Make</th>	
<th>Year</th>

</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "seller";

// Create a connection
$connection = new mysqli($servername, $username, $password, $database);

if($connection->connect_error){
	die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT seller_name, address, city, phone_number , email , vehicle_model , vehicle_make , year FROM seller_table ORDER BY time DESC";
$result = $connection->query($sql);

   while($row = $result->fetch_assoc()) {
   echo "<tr>
   <td>".$row["seller_name"]."</td>
   <td>".$row["address"]."</td>
   <td>".$row["city"]."</td>
   <td>".$row["phone_number"]."</td>
   <td>".$row["email"]."</td>
   <td>".$row["vehicle_model"]."</td>
   <td>".$row["vehicle_make"]."</td>
   <td>".$row["year"]."</td>
  </tr>";
    }
	
echo "table";
	

$connection->close();

?> 
</table>
</body>
</head>
</html>