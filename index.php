<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic Working File</title>
    <meta name="description" content="A file we're using to build php scripts">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <style>
    	.first {
    		color: blue;
    	}

    	#second {
    		color: green;
    	}

    	.variable {
    		color: red;
    	}
    </style>

</head>

<body>
    <h1>This is html text but everything else that follows is php</h1>
    
 	<p>
		<?php 
		//phpinfo(); //this is the php specs page
		?>
	</p>

	<p class="first">
		<?php echo "Hello IMMT Class!"; ?>
	</p>

	<p id="second">
	    <?php echo "Hello" . " " . "IMMT Class!"; ?> 
	</p>

	<p class="variable">
		<?php 
			$var1 = "World!";
			$var2 = "Hello";
			$var3 = $var2 . " " . $var1;
			echo $var3;
		?>
	</p>

	<p class="variable">
		<?php 
			$var1 = 23;
			$var2 = 233300088;
			$var3 = $var2 + $var1;
			echo $var3;
		?>
	</p>
	<p>
		Hello World!
	</p>
	


	
</body>
</html>