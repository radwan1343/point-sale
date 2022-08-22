<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=point_sale", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$response = array('success' => false);

if(isset($_POST['name']) && $_POST['name']!='' && isset($_POST['price']) && $_POST['price']!='' && isset($_POST['quantity']) && $_POST['quantity']!='')
{
	$sql = "INSERT INTO test(name, price, quantity) VALUES('".addslashes($_POST['name'])."', '".addslashes($_POST['price'])."', '".addslashes($_POST['quantity'])."')";
	
	if($conn->query($sql))
	{
		$response['success'] = true;
	}
}

echo json_encode($response);