<?php 

$servername = "mysql796.umbler.com:41890";
$username = "drawandcode";
$password = "BGr9mRaV7?ZGcK+";
$dbname = "drawandcode";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}

// get user count from database
$sql = "SELECT id, email, name, rank FROM users";
$result = $conn->query($sql);
  
// Creating 10 random users on database
$i = ($result->num_rows) + 1;
while ($i <= ($result->num_rows + 10))  {
    $id         =   $i;
    $name       =   "User " .$i;
    $email      =   "user".$i."@email.co";
    $rank       =   rand(1, 3);

    $sql = "INSERT INTO users VALUES ('$id', '$email', '$name', '$rank')";

    if(mysqli_query($conn, $sql)){
        echo "<p>User " . $i . " stored in a database successfully.</p>";
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
    $i++;
}

header("Location: http://localhost/ranks/");

// Close connection
mysqli_close($conn);

$conn->close();

?>