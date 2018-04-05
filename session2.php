<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

// Read the sessions
if ($_SESSION["username"] != "") {

	echo "<h1>Hello ";
    echo $_SESSION["username"];
    echo "</h1> ";
    if ($_SESSION["name"] != "") {
        echo "<h2>Your custom name is ";
        echo $_SESSION["name"];
        echo "</h2>";
    }

    echo "<br><a href='session3.php'>And another page</a>";
}else{
?>

	You are not a valid user


	<?php
}


?>

</body>
</html>