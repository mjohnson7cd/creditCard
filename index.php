<?php
    session_start();
?>

<!DOCTYPE html>
<body>
    <h1>Gourmet Fruit</h1>
    <form action="summary.php" method="post"> 

        <p>All fruits are $10 a fruit!</p><br>

        <label for="apples">Apple qty:</label>
        <input type="number" step="1" id="apples" name="apples"
        value="<?php echo (isset($_SESSION['apples']) ? $_SESSION['apples'] : 0); ?>"><br>

        <label for="bananas">Banana qty:</label>
        <input type="number" step="1" id="bananas" name="bananas"
        value="<?php echo (isset($_SESSION['bananas']) ? $_SESSION['bananas'] : 0); ?>"><br>

        <label for="oranges">Orange qty:</label>
        <input type="number" step="1" id="oranges" name="oranges"
        value="<?php echo (isset($_SESSION['oranges']) ? $_SESSION['oranges'] : 0); ?>"><br>


        <input type="submit" value="View Summary">

    </form>

</body>

<?php

?>