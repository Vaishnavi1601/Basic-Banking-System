<?php
    include 'config.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Basic Banking System</title>
</head>   
<body style= "background-color:#71a4a57a; background-repeat:no-repeat;background-size: cover;;">
    <div class="navbar" style="padding:0.5%;">
        <a href="index.php"><i class="fa fa-fw fa-home" style="color: red;"></i> Home</a>
        <a href="create.php"><i class="fa fa-fw fa-user" style="color: red;"></i> Create</a>
        <a href="transaction.php"><i class="fas fa-money-check-alt" style='color: red;'></i> Transfer</a>
        <a href="tranhis.php"><i class="fa fa-fw fa-history" style="color: red;"></i> Transaction Details</a>
    </div>
    <h1 style="padding-left: 2%;border:1px solid;border-radius:25px;color: #faf607;margin-top:3%;background-color:black;padding-top: 1%;padding-bottom: 1%;">E-Banking System</h1>
    
    
    <div class="con">
        <img src="user.png" style="background-color: transparent;width: 217px;margin-left: 3%;height:185px;margin-top: 5%;margin-bottom: -14%;border-radius: 14%;">
        <img src="transact.png" style="border-radius: 14%;background-color:transparent;width: 208px;margin-left: 25%;margin-bottom: -14%;height: 188px;opacity: 37.5;">
        <img src="pay.png" style="border-radius: 17%;background-color: transparent;width: 240px;margin-left: 24%;margin-bottom: -15%;height: 180px;">
    </div>
    
   <div class="btn" style="   border: 1px solid yellow;margin-top: 21%;margin-bottom: 2%;background-color: black;padding: 1%;border-radius: 23px;">
        
        <a href="create.php">
            <button class="btn" style="margin-left: 3%;  background-color: transparent;padding: 1em;color: #e1f405; border: 4px solid;border-radius: 20px;">CREATE</button>
        </a>

        <a href="transaction.php">
            <button class="btn" style=" margin-left: 34%;   background-color: transparent;padding: 1em;color: #e1f405;border: 4px solid;border-radius: 20px;">MAKE TRANSACTION</button>
        </a>
        
        <a href="tranhis.php">
            <button class="btn" style="  margin-left: 28%;  background-color: transparent;padding: 1em;color: #e1f405;border: 4px solid;border-radius: 20px;">TRANSACTION HISTORY</button>
        </a>
    </div>
    <footer class="text-center mt-5 py-2">
        <p style="text-align: center;">© 2021. Made by <b>VAISHNAVI JAISWAL</b> <br> </p>
    </footer>
</body>
</html>



   


