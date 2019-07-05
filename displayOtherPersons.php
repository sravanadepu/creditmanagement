<?php
    include 'db.php';
    session_start();
    $query = "SELECT * FROM users ORDER BY u_id";
    $run = $con->query($query);
    $fromName = $_POST['fromName'];
    $_SESSION["fromName"]=$fromName;
    $from_u_id = $_POST['from_u_id'];
echo "<h3>Other persons</h3>";
echo "<div style=\"margin:0 auto;display: inline-block;\" >";
?>

<div >
    <form method="POST" action="updateTransactionTable.php">
    <input type="radio" name="one" value="sai">sai<br><br>
    <input type="radio" name="two" value="rahul">rahul<br><br>
    <input type="radio" name="three" value="ramesh">ramesh<br><br>
    <input type="radio" name="four" value="sravan">sravan<br><br>
    <input type="radio" name="five" value="chakradhar">chakradhar<br><br>
    <input type="radio" name="six" value="rohan">rohan<br><br>
    <input type="radio" name="seven" value="upender">upender<br><br>
    <input type="radio" name="eight" value="rama">rama<br><br>
    <input type="radio" name="nine" value="raju">raju<br><br>
    <input type="radio" name="ten" value="manideep">manideep<br><br>    
    <p>Enter the amount of credits to transfer:</p>
    <input type="text" size="40px" id="amount" name="amount"/><input type="submit" name="submit">
</form>

</div>