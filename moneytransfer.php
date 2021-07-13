<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>
  <!-- navbar -->
      <nav class="navbar navbar-expand-md navbar-light bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color:white">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="moneytransfer.php" style="color:white">View All customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php" style="color:white">Transaction History</a>
              </li>
          </div>
       </nav>

<?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<div class="container">
        <h2 class="text-center ">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-sm  table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center ">Id</th>
                            <th scope="col" class="text-center ">Name</th>
                            <th scope="col" class="text-center ">E-Mail</th>
                            <th scope="col" class="text-center ">Balance</th>
                            <th scope="col" class="text-center ">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduser.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-info">Transact</button></a></td>
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
       
</body>
</html>