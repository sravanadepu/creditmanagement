<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Credit Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <script type="text/javascript" src="js/ajax.js"></script>
</head>

<body>

    <div id="welcome">
        <h1>Welcome to Credit Management System</h1>
    </div>

    <p id="chooseFrom">Choose an option using below button</p>

    <div class="dropdown">
        <button class="dropbtn">Available Options!</button>

        <div class="dropdown-content">

            <form method="POST" action="index.php">
                <a onclick="clean()" name="home">Home/Instructions</a>
                <a onclick="ajax()" name="showallusers">Show All Users</a>
            </form>

        </div>
    </div>

    <div id="content" style="margin:0 auto;" >
    </div>

   <div id="display_other_persons_id" style="text-align: ">
    </div>

</body>

</html>