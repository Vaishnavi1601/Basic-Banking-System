<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="create.css">

</head>

<body style="background-color: #cfe8f4;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transaction.php';
                     </script>";
                    
    }
  }
?>
<div class="navbar" style="margin-bottom: 26px;background-color:dimgray;margin-top: 1%;padding: 1%;font-family: ui-sans-serif;">
        <a href="index.php" style="color: white;"><i class="fa fa-fw fa-home" style="color: red;" aria-hidden="true"></i> Home</a>
        <a href="create.php" style="color: white;"><i class="fa fa-fw fa-user" style="color:red;" aria-hidden="true"></i> Create</a>
        <a href="transaction.php" style="color: white;"><i class="fas fa-money-check-alt" style="color: red;" aria-hidden="true"></i> Transfer</a>
        <a href="tranhis.php" style="margin-right: 63em;color: white;"><i class="fa fa-fw fa-history" style="color: red;" aria-hidden="true"></i> Transaction Details</a>
</div>
<h2 class="text-center pt-4" style="color : black;margin-top:-2%;font-family: emoji;font-size: xxx-large;font-weight: bolder;">Create a User</h2>
  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="uuser.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required="">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required="">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required="">
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit" style="color:black;">
              <input class="app-form-button" type="reset" value="RESET" name="reset" style="color:black;">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center mt-5 py-2">
            <p>© 2021. Made by <b>VAISHNAVI JAISWAL</b> <br> </p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body></html>