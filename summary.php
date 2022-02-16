<?php
    session_start();

    $products=array();

    if(isset($_POST)){
        $_SESSION["apples"] = $_POST["apples"];
        $_SESSION["bananas"] = $_POST["bananas"];
        $_SESSION["oranges"] = $_POST["oranges"];
    }

    $subtotal = ($_SESSION["apples"]*10) + ($_SESSION["bananas"]*10) + ($_SESSION["oranges"]*10); 

    if(!isset($_SESSION['subtotal'])){
        $_SESSION['subtotal'] = $subtotal;
    }
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Summary:</h1>

    <?php echo "Apples: " . $_SESSION["apples"] . " | Price: $10"; ?><br>
    <?php echo "Bananas: " . $_SESSION["bananas"] . " | Price: $10"; ?><br>
    <?php echo "Oranges: " . $_SESSION["oranges"] . " | Price: $10"; ?><br><br>

    <?php echo "Subtotal: $" . $subtotal . ".00"; ?><br>
    
    <a href="./tax.php"><button>Continue</button></a><br>
    <a href="./index.php"><button>Make Changes</button>


</body>
</html>