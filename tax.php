<?php
    session_start();
    $_SESSION['total'] = $_SESSION["subtotal"] * 1.095;
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Taxes:</h1>

    <?php echo "Subtotal: $" . number_format($_SESSION["subtotal"], 2, '.', ','); ?><br>
    <?php echo "Tax: $" . number_format(($_SESSION["subtotal"]*.095), 2, '.', ','); ?><br>
    <?php echo "Total: $" . number_format($_SESSION["total"], 2, '.', ','); ?><br><br>

    <a href="./index.php"><button>Make Changes</button></a><br><br>

    <?php 
        if(isset($_SESSION["authenticate"])) {
            if(!$_SESSION["authenticate"])
            echo "<br><p style='color: red;'>Invalid Credentials</p><br>";
        }
    ?>


    <form action="./authentication.php" mehtod="post">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Submit" formmethod="post" formaction="./authentication.php">
    </form>


</body>
</html>