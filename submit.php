<?php
$FirstName = filter_input(INPUT_POST, 'FirstName');
$LastName = filter_input(INPUT_POST, 'LastName');
$MoolyaID = filter_input(INPUT_POST, 'MoolyaID');
$Education = $_POST['Education'];
if (!empty($FirstName)){
if (!empty($LastName)){
if (!empty($MoolyaID)){
if (!empty($Education)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "form";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno().') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO detail (FirstName, LastName, MoolyaID,Education)
values ('$FirstName','$LastName','$MoolyaID','$Education')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
".$conn->error;
}
$conn->close();
}
}
else{
echo"Education not found";
die();
}
}
else{
echo "MoolyaID should not be empty";
die();
}
}
else{
echo "Last Name should not be empty";
die();
}
}
else{
echo "First Name should not be empty";
die();
}

