<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Basic banking website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

  </head>

  <body style="background-color: skyblue">
  <!-- navbar -->
      <nav class="navbar navbar-expand-md navbar-light bg-dark">>
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
        <div class="container-fluid">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>OUR BANK</h1>
                </div>
              </div>
             
            </div>
              <div class="row  text-center">

                  <div class="col-md ">
                    <img src="img/view.svg" width="40%" class="img-fluid">
                    <br><br>
                    <a href="moneytransfer.php"><button class="btn btn-success">View All customers</button></a>
                  </div>
                  <div class="col-md ">
                    <img src="img/transact.svg" width="40%" class="img-fluid">
                    <br><br>
                    <a href="transactionhistory.php"><button class="btn btn-success">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <br><br>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Sonali Goyal</b> <br> The Sparks Foundation</p>
      </footer>
        </body>
</html>