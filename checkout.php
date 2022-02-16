<?php
    session_start();
    if (!$_SESSION["authenticate"]){
        header("Location: ./tax.php");
        exit;
    } 

    
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Checkout:</h1>

    <?php echo "Total: $" . number_format($_SESSION["total"], 2, '.', ','); ?><br><br>

    <form name="credit" action="#" method="post">
        <label for="cardnum">Enter card number (no spaces): </label>
        <input type="password" name="cardnum" id="cardnum"><br>
        <input type="submit" value="Submit" onclick="cardValidator(document.credit.cardnum)">
    </form>

    
    <a href="./index.php"><button>Make Changes</button>


    <!-- <script src="./credit.js"></script> -->

    <script>
        function cardValidator(cardnumber){
            let visa = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
            let amex = /^(?:3[47][0-9]{13})$/;
            let master = /^(?:5[1-5][0-9]{14})$/;
            if(cardnumber.value.match(visa)){
                alert("Visa accepted. Goodbye.");
                return true;
            } else if (cardnumber.value.match(amex)){
                alert("American Express accepted. Goodbye.");
                return true;
            } else if (cardnumber.value.match(master)){
                alert("Master Card accepted. Goodbye.");
                return true;
            } else {
                alert("Error: Card Invalid");
                return false;
            }
        }
    </script>



</body>
</html>