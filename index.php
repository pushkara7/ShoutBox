<?php
include_once('database.php');
include_once('action.php');

$shouts = mysqli_query($db,"SELECT * from shoutbox ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>SHOUT IT!</title>
	<link rel="stylesheet" href="shoutbox.css"/>
</head>
<body>
    <div id="container">
    	<header>
    		<h1>SHOUT IT! SHOUTBOX</h1>
    	</header>   		
        <div id="shoutbox">
            <ul>
              <?php while($shout = mysqli_fetch_assoc($shouts)) :?>
              <li class="shout"><span><?php echo $shout['time'] ?></span>
                <?php echo $shout['user'].":".$shout['message'] ?></li>
              <?php endwhile;  ?>
            </ul>   			
        </div>
        <div id="input">
            <?php 
              if(isset($_GET['error'])) { ?>
                <div class="error"?><?php echo $_GET['error'] ?></div>
            <?php } ?>
            <form novalidate method="post" action="action.php" >
                <div>
                    <input class="" type="text" name="user" placeholder="username" required/>
                    <input class="" type="text" name="message" placeholder="message" required/>
                </div>
                <div>
                    <input type="submit" name="submit" value="shout it out!"/>
                </div>
            </form>
        </div>
        <footer></footer>
    </div>
</body>
</html>