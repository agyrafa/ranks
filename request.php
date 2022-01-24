<?php 

// database info
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

$sql = "SELECT id, email, name, rank FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data on each row
  while($row = $result->fetch_assoc()) {
      echo '
        <div class="medium-3 item">
            <div class="card">
                <div class="card-rank" data-rank="'.$row["rank"].'">
                    <img width="35" src="assets/img/'.$row["rank"].'.png"/>
                    <div class="rankSelect hide">
                        <select name="rank" class="rankSpan">
                            <option value="0">Rank</option>
                            <option value="1">Bronze</option>
                            <option value="2">Silver</option>
                            <option value="3">Gold</option>
                        </select>
                    </div>
                </div>
                <div class="card-section">
                    <p class="id hide">'.$row["id"].'</p>
                    <p><span class="nameSpan">'.$row["name"].'</span></p>
                    <p class="email"><span class="emailSpan">'.$row["email"].'</span></p>
                </div>
                <div class="card-footer">
                    <button class="button submitBtn hide"><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>';
    }
} else {
    echo '<div class="grid-container spacer50">
            <div class="grid-x grid-padding-x">
                <p>No results.</p>
            </div>
        </div>';
}
$conn->close();

?>