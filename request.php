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
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Taking all 3 values from the form data(input)
    $id         =   rand();
    $name       =   $_REQUEST['name'];
    $email      =   $_REQUEST['email'];
    $rank       =   intval($_REQUEST['rank']);
    
    $sql = "INSERT INTO users VALUES ('$id', '$email', '$name', '$rank')";

    print_r($sql);

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>"; 

        header("Location: http://localhost/ranks/");
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
}

$sql = "SELECT id, email, name, rank FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<div class="grid-container">
            <div class="grid-x grid-padding-x">
                <table class="stack hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Rank</th>
                        </tr>
                    </thead>
                    <tbody>';
  while($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["email"]."</td>
        <td><img width='35' src='assets/img/".$row["rank"].".png'/></td>
    </tr>";
  }
  echo '</tbody></table></div></div>';
} else {
  echo "No results";
}
$conn->close();

?>