<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color : #b9539a63;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<div class="navbar" style="margin-bottom: 26px;background-color:dimgray;margin-top: 1%;padding: 1%;font-family: ui-sans-serif;">
        <a href="index.php" style="color: white;"><i class="fa fa-fw fa-home" style="color: red;" aria-hidden="true"></i> Home</a>
        <a href="create.php" style="color: white;"><i class="fa fa-fw fa-user" style="color:red;" aria-hidden="true"></i> Create</a>
        <a href="transaction.php" style="color: white;"><i class="fas fa-money-check-alt" style="color: red;" aria-hidden="true"></i> Transfer</a>
        <a href="tranhis.php" style="margin-right: 63em;color: white;"><i class="fa fa-fw fa-history" style="color: red;" aria-hidden="true"></i> Transaction Details</a>
</div>
<div class="container">
<h2 class="text-center pt-4" style="font-weight: 600;font-family: emoji;color : black;font-size: xxx-large;">Transaction</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selectuser.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #b9f721;font-weight: 700;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>VAISHNAVI JAISWAL</b> <br> </p>
        </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>