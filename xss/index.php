<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XSS | HTML5SEC Demo</title>
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
              <li class="active"><a href="/form">XSS</a></li>
              <li><a href="/form">Form</a></li>
              <li><a href="/ajax">Ajax</a></li>
              <li><a href="/iframe">Iframe</a></li>
              <li><a href="/filter">Filter</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

	<h1>おみくじゲーム</h1>
	
	<form method="post" action="">
	<p>名前 : <input type="text" name="name" value=""></p>
	<input class="btn btn-primary" type="submit" value="submit">
	</form>
	
	<?php 
		if(!empty($_POST['name'])){
			$omikuji = array('大吉','中吉','末吉','凶');
			$result = $omikuji[ rand(0, count($omikuji)-1) ];
			
			echo "<hr>";	
			printf("<h2>%s さんは %s です！</h2>",$_POST['name'],$result);
		}
	?>
	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.1.7.2.min.js"></script>

  </body>
</html>
