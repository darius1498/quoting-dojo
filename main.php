<?php 
	session_start();
	require_once("new-connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quoting Dojo</title>
		<link rel="stylesheet" type="text/css" href="quote.css">
	</head>
	<body>
		<h1>Here are some awesome quotes!</h1>
<?php 
		$query =  "SELECT * FROM quotes";
	    $result = mysqli_query($connection, $query);

	    if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    	while($row = mysqli_fetch_assoc($result)) {
	    		$date = $row["created_at"];
	    		?>
	    		<div class="quotes-container">
	    			<p class="quote"><?= '"'.$row["quote"].'"'; ?></p>
	    			<p class="name"><?= '- '.$row["name"].' at '. $date; ?></p>
	    		</div>
	    		<?php

	       		}
	    } 
?>
			<a class="back" href="index.php">BACK</a>
	</body>
</html>