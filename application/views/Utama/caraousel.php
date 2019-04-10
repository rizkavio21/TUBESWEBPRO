<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <style>
        body{
            background-color: #1b1818;
        }
    </style>
</head>

<body>
  <div class="container">
    <div class="row">
     
      
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      	<!-- Carousel Indikator -->
        <ol class="carousel-indicators">
        	<li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="carousel-example-generic" data-slide-to="1"></li>
            <li data-target="carousel-example-generic" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for Slide -->
        <div class="carousel-inner">
        	<div class="item active">
            	<img src="assets/1jpg.jpg" alt="Slide 1">
            </div>
            <div class="item">
            	<img src="assets/2.jpg" alt="Slide 1">
            </div>
            <div class="item">
            	<img src="assets/3.jpg" alt="Slide 1">
            </div>
        </div>
        
        <!-- Control -->
       
      </div>
      <a href="#carousel-example-generic" class="carousel-control left" data-slide="prev" role="button">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a href="#carousel-example-generic" class="carousel-control right" data-slide="next" role="button">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
      
    </div>
  </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
