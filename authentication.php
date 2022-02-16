<?php 
    session_start();
    if(isset($_POST)){
        if (!filter_input(INPUT_POST, "username")) {
            echo "Username went wrong";
        } else {
            $_SESSION["username"] = $_POST["username"];
        }
        
        $_SESSION["password"] = $_POST["password"];
    }

    if ($_SESSION["password"] === "imnotbroke"){
        $_SESSION["authenticate"] = true;
        header("Location: ./checkout.php");
        exit;
    } else {
        $_SESSION["authenticate"] = false;
        header("Location: ./tax.php");
        exit;
    }
?>
