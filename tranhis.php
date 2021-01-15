<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body style="background-color : #90ded3d1;">
<div class="navbar" style="margin-bottom: 26px;background-color:dimgray;margin-top: 1%;padding: 1%;font-family: ui-sans-serif;">
        <a href="index.php" style="color: white;"><i class="fa fa-fw fa-home" style="color: red;" aria-hidden="true"></i> Home</a>
        <a href="create.php" style="color: white;"><i class="fa fa-fw fa-user" style="color:red;" aria-hidden="true"></i> Create</a>
        <a href="transaction.php" style="color: white;"><i class="fas fa-money-check-alt" style="color: red;" aria-hidden="true"></i> Transfer</a>
        <a href="tranhis.php" style="margin-right: 63em;color: white;"><i class="fa fa-fw fa-history" style="color: red;" aria-hidden="true"></i> Transaction Details</a>
</div>
    <div class="container">
        <h2 class="text-center pt-4" style="    font-family: emoji;
    color: black;
    font-size: xx-large;
    font-weight: 600;">Transaction History</h2>
        <br>
    <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>VAISHNAVI JAISWAL</b> <br>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>