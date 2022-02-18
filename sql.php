<!DOCTYPE html>
<html lang="en-UK">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>IceNET Website</title>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
  </head>

  <body style="background-color:white;">

  <div class="container">
    <br>
    <a href="https://github.com/IceDefcon">
      <img align="right" src="/img/ice.png" />
    </a>
    <p><b>
      Research through the principles of communication <br>
      between PCB hardware and CPU firmware <br>
      with a bit of Math and Physics.
    </p></b>
  </div>

  <div class="container">
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <a class="btn btn-primary" href="index.php" role="button">Home</a>
      </div>

      <div class="btn-group" role="group">
        <a class="btn btn-primary" href="git.php" role="button">GitHub</a>
      </div>

      <div class="btn-group" role="group">
        <a class="btn btn-primary" href="sql.php" role="button">SQL</a>
      </div> 

      <div class="btn-group" role="group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Music <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-wide">
          <li><a href="defcon24.php">Defcon 24</a></li>
          <li><a href="drum.php">DB</a></li>
          </li>
        </ul>
      </div>
    </div>
  </div>

<div class="container">
    <h1> SQL Database Testing </h1>
</div>

<div class="container">

    <?php
$servername = "localhost";
$username = "35670400_icenet";
$password = "password123";
$dbname = "35670400_icenet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, address, data FROM dma";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Address: " . $row["address"]. " Data: " . $row["data"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</div>
