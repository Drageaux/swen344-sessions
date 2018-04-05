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
    }

    echo "<br>This is the last page";
}else{
?>

	You are not a valid user


	<?php
}


?>




</body>
</html>