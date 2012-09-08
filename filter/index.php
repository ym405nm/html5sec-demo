<?php 
if(strcmp($_POST['filter'],'1')==0){
	header('X-XSS-Protection: 1');
}else if(strcmp($_POST['filter'],'2')==0){
	header('X-XSS-Protection: 1; mode=block');
}else if(strcmp($_POST['filter'],'3')==0){
	header('X-XSS-Protection: 0');
}
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Filter | HTML5SEC Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">HTML5SEC Demo</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="/form">XSS</a></li>
              <li><a href="/form">Form</a></li>
              <li><a href="/ajax">Ajax</a></li>
              <li><a href="/iframe">Iframe</a></li>
              <li class="active"><a href="/filter">Filter</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

	<h1>XSS FILTER TEST</h1>
	
	<form method="post" action="">
	<select name="filter">
		<option value="0">none</option>
		<option value="1">X-XSS-Protection: 1</option>
		<option value="2">X-XSS-Protection: 1; mode=block</option>
		<option value="3">X-XSS-Protection: 0</option>
	</select>
	<input type="text" name="name" value="<script>alert(1)</script>">
	<input class="btn btn-primary" type="submit" value="submit">
	</form>
	
	<?php 
		if(!empty($_POST['name'])){
			echo "<hr>";	
			printf("<p>%s</p>",$_POST['name']);
		}
	?>
	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.1.7.2.min.js"></script>

  </body>
</html>
