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
    echo ", this is the last page";
    echo "</h1> ";
    if ($_SESSION["name"] != "") {
        echo "<h2>Your custom name is ";
        echo $_SESSION["name"];
        echo "</h2>";
    }


?>
    <form class = "form-favorite" role = "form"
        action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>" method = "post">

        <label>Your favorite color</label>
        <input type = "text" name = "color" required autofocus></br>
        <label>Your favorite food</label>
        <input type = "text" name = "food" required>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
           name = "submit">Submit</button>
     </form>

<?php
}else{
?>

	You are not a valid user


	<?php
}


?>

<div id="favorite"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function store_favorite(food, color) {
         $.ajax({
            url: "store_favorite.php",
            success: (result) => {
                let html = "";
                html += "Your favorite food is ";
                html += result["food"];
                html += "<br> Your favorite color is ";
                html += result["color"];

                $("favorite").html(html);
            }
         });
    }
</script>



</body>
</html>