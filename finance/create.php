<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $datum = $_POST['datum'];
        $cas = $_POST['cas'];
        $popis = $_POST['popis'];
        $typ_platby = $_POST['typ_platby'];
        $pocet = $_POST['pocet'];
        $zostatok = $_POST['zostatok'];
        $status = $_POST['status'];
        
        $q = " INSERT INTO `wallet`(`datum`, `cas`, `popis`, `typ_platby`, `pocet`, `zostatok`, `status`) VALUES ( '$datum', '$cas', '$popis', '$typ_platby', '$pocet', '$zostatok', '$status' )";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Vytvoriť</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin.php">Domov</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Vytvoriť nové </h1>
 </div><br>

 <label> Datum: </label>
 <input type="date" name="datum" class="form-control"> <br>

 <label> CAS: </label>
 <input type="time" name="cas" class="form-control"> <br>

 <label> POPIS: </label>
 <input type="text" name="popis" class="form-control"> <br>
 
 <label> TYP_PLATBY: </label>
 <input type="text" name="typ_platby" class="form-control"> <br>

 <label> POCET: </label>
 <input type="text" name="pocet" class="form-control"> <br>

 <label> ZOSTATOK: </label>
 <input type="text" name="zostatok" class="form-control"> <br>
 
 <label> STATUS: </label>
 <input type="text" name="status" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>