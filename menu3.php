<!DOCTYPE html>
<html lang="en-UK">
	<head>
		<title>IceNET Website</title>
		<link rel="stylesheet" href="/css/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="/js/main.js"></script>
		<style>
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      	width: 100%;
      	margin: 15px;
  		}
  		</style>
	</head>
	<body style="background-color:white;">

	<div class="container">
	<a href="https://github.com/IceDefcon">
	<img align="right" src="/img/ice.png" >
	</a>
	</p>
	<br>
	</div>

	<div class="container">
	  <div class="btn-group btn-group-justified" role="group" aria-label="...">
	  	<div class="btn-group" role="group">
	      <a class="btn btn-primary" href="index.php" role="button">Home</a>
	    </div>
	    <div class="btn-group" role="group">
	      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu1 <span class="caret"></span>
	      </button>
	      <ul class="dropdown-menu dropdown-menu-right dropdown-menu-wide">
	        <li><a href="menu1.php">Sub1</a>
	        </li>
	        <li><a href="under.php">Sub2</a>
	        </li>
	        <li><a href="under.php">Sub3</a>
	        </li>
	        </li>
	      </ul>
	    </div>    <div class="btn-group" role="group">
	      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu2 <span class="caret"></span>
	      </button>
	      <ul class="dropdown-menu dropdown-menu-right dropdown-menu-wide">
	        <li><a href="menu2.php">Sub1</a>
	        </li>
	        <li><a href="under.php">Sub2</a>
	        </li>
	        <li><a href="under.php">Sub3</a>
	        </li>
	      </ul>
	    </div>
	    <div class="btn-group" role="group">
	      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu3 <span class="caret"></span>
	      </button>
	      <ul class="dropdown-menu dropdown-menu-right dropdown-menu-wide">
	        <li><a href="menu3.php">Sub1</a>
	        </li>
	        <li><a href="under.php">Sub2</a>
	        </li>
	        <li><a href="under.php">Sub3</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>

	<div class="container">
	  <br>
	  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">
	      <div class="item active">
	        <img src="/img/under.png" alt="Under PNG">
	      </div>

	      <div class="item">
	        <img src="/img/under2.png" alt="Under JPG">
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>
