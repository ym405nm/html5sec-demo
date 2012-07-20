<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FORM | HTML5SEC Demo</title>
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
              <li><a href="/">Home</a></li>
              <li class="active"><a href="/form">Form</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

	<h1>Form</h1>
	
	<div class="alert alert-success">
    	   	<a class="close" data-dismiss="alert" href="#">×</a>
		<p class="alert-heading">Thank you!!</p>	
    	</div>

	<table class="table table-bordered">
	<tr>
		<td>Name</td>
		<td><?php echo (isset($_POST['name']))?htmlspecialchars($_POST['name'],ENT_QUOTES,'utf-8'):''; ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo (isset($_POST['email']))?$_POST['email']:''; ?></td>
	</tr>
	<tr>
		<td>URL</td>
		<td><?php echo (isset($_POST['url']))?htmlspecialchars($_POST['url'],ENT_QUOTES,'utf-8'):''; ?></td>
	</tr>

	<tr>
		<td>Comment</td>
		<td><?php echo (isset($_POST['comment']))?nl2br(htmlspecialchars($_POST['comment'],ENT_QUOTES,'utf-8')):''; ?></td>
	</tr>


	</table>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.1.7.2.min.js"></script>

  </body>
</html>
