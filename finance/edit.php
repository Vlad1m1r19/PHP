<?php
include 'connection.php';

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:admin.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM wallet WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:admin.php");
      exit;
    }
    $datum = $row['datum'];
    $cas = $row['cas'];
    $popis = $row['popis'];
    $typ_platby = $row['typ_platby'];
    $pocet = $row['pocet'];
    $zostatok = $row['zostatok'];
    $status = $row['status'];
  }
  else{
    $id = $_POST["id"];
    $datum = $_POST['datum'];
    $cas = $_POST['cas'];
    $popis = $_POST['popis'];
    $typ_platby = $_POST['typ_platby'];
    $pocet = $_POST['pocet'];
    $zostatok = $_POST['zostatok'];
    $status = $_POST['status'];

    $sql ="UPDATE wallet set datum='$datum', cas='$cas', popis= '$popis',typ_platby='$typ_platby',pocet='$pocet', zostatok='$zostatok', status='$status'where id='$id'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="admin.php">Zmeniť</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin.php">Domov</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Pridať nové</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Upraviť </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> datum: </label>
 <input type="date" name="datum" value="<?php echo $datum; ?>" class="form-control"> <br>

 <label> cas: </label>
 <input type="time" name="cas" value="<?php echo $cas; ?>" class="form-control"> <br>

 <label> popis: </label>
 <input type="text" name="popis" value="<?php echo $popis; ?>" class="form-control"> <br>

 <label> typ_platby: </label>
 <input type="text" name="typ_platby" value="<?php echo $typ_platby; ?>" class="form-control"> <br>

 <label> pocet: </label>
 <input type="text" name="pocet" value="<?php echo $pocet; ?>" class="form-control"> <br>

 <label> zostatok: </label>
 <input type="text" name="zostatok" value="<?php echo $zostatok; ?>" class="form-control"> <br>

 <label> status: </label>
 <input type="text" name="status" value="<?php echo $status; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="admin.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
