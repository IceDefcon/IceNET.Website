<!DOCTYPE html>
<html lang="en-UK">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>IceNET</title>
		<link rel="stylesheet" href="/css/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="js/main.js"></script>
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
				<a class="btn btn-primary" href="stack.php" role="button">TCP/IP Stack</a>
			</div>

			<div class="btn-group" role="group">
				<a class="btn btn-primary" href="git.php" role="button">Git Hub</a>
			</div> 

			<div class="btn-group" role="group">
				<a class="btn btn-primary" href="cv.php" role="button">CV</a>
			</div> 
		</div>
	</div>

        <div class="container"><br>
	    <img src="/img/stack.png" />
        </div><br>

	<div class="container">
		<script>document.getElementById("image");</script>
		<button onclick="DmaStatus(5)"> DMA Status </button>
		<p id="data"></p><br>
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
			if ($conn->connect_error) 
			{
                                echo "<p align='left'> <font color=red size='6pt'> Client is Disconnected</font> </p>";
		  		die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT id, address, data FROM dma";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
                                echo "<p align='left'> <font color=green size='6pt'> Client is Connected </font> </p>";
		  		// output data of each row
		  		while($row = $result->fetch_assoc()) 
		  		{
		    		echo "id: " . $row["id"]. " - Address: " . $row["address"]. " Data: " . $row["data"]. "<br>";
		  		}
			} 		
			else
			{
		  		echo "<p align='left'> <font color=green size='6pt'> Client is Connected </font> </p>";
			}
			
			$conn->close();
		?>

	</div>
</html>
