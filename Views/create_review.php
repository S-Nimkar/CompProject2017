<?php 
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$passsword="root"; // Mysql password
$db_name="StudentReviews"; // Database name
// Connect to server and select databsae.
$dbc = mysqli_connect("$host", "$username", "$passsword")or die("cannot connect");
mysqli_select_db($dbc, $db_name) or die("cannot select DB");
$userid = $_SESSION['account'][2];

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="../Styles/Minified-Styles/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../Styles/master.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class ="back-colour">
    <header>
		<nav>
		  <div class="nav-wrapper base-colour">
		    <a href="homepage.php" class="logo-title left homepage-logo">StudentReviews</a>
		    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		      	<?php
		    	$current_username = $_SESSION['account'][1];
		    	echo "<li><a href=\"../Database/getaccount.php\">Account: $current_username</a></li>
			        <li><a href=\"../Database/logout.php\">Logout</a></li>";
		   		 ?>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		      	<?php
		    	$current_username = $_SESSION['account'][1];
		    	echo "<li><a href=\"../Database/getaccount.php\">Account: $current_username</a></li>
			        <li><a href=\"../Database/logout.php\">Logout</a></li>";
			    ?>
		      </ul>
		  </div>
		</nav>
    </header>
    <main>
    <div class="container">
    </div>
    </main>
    <script type="text/javascript" src="../Scripts/Minified-Scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../Scripts/Minified-Scripts/materialize.min.js"></script>
    <script type="text/javascript" src="../Scripts/create_review.js"></script>
</body>
</html>
