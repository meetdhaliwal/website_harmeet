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


?> 
<style>.table ,th,td {
	
	border: 8px solid pink;
}

</style>

<?php
$seller = $_REQUEST['seller'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$Model = $_REQUEST['Model'];
$Make = $_REQUEST['Make'];
$Year = $_REQUEST['Year'];
$link="https://www.jdpower.com/Cars/$Year/$Make/$Model";
//echo $seller;
//echo $address;
//echo $seller;
//echo $address;
//echo $city;
//echo $phone;
//echo $email;
//echo $Model;
//echo $Make;
//echo $Year;
//echo $link;
//$sql_query="INSERT INTO `seller_table`(`seller name`, `address`, `city`, `phone number`, `email`, `vehicle model`, `vehicle make`, `year`) VALUES ("$seller","$address","$city","$phone","$email","$Model","$Make","$Year")";
$sql_query = "INSERT INTO `seller_table` (`seller_name`, `address`, `city`, `phone_number`, `email`, `vehicle_model`, `vehicle_make`, `year`) VALUES ('$seller', '$address', '$city', '$phone', '$email', '$Model', '$Make', '$Year');";
$connection->query($sql_query);
?>

<html>
<head>
</head>
<body>
<button type= "button" onclick="window.location.href = 'homepage.html'">home</button> 
<table class="table">
<tr>
<th>Seller Name</th>
<th>Address</th>
<th>City</th>
<th>phone</th>
<th>email</th>
<th>Model</th>
<th>Make</th>	
<th>Year</th>
<th>Link</th>
</tr>
<tr>
<td><?php echo $seller; ?></td>
<td><?php echo $address; ?></td>
<td><?php echo $city; ?></td>
<td><?php echo $phone; ?></td>
<td><?php echo $email; ?></td><td><?php echo $Model; ?></td>
<td><?php echo $Make; ?></td>
<td><?php echo $Year; ?></td><td><a href="<?php echo $link; ?>"target="_blank"><?php echo $link; ?></a></td>
</tr>

</table>
</body>
</html>