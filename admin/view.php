<?php
require_once ("../admin/target.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Admin Area</title>
</head>
               
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="index.php" class="navbar-brand">REAL ESTATE</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="index.php" class="nav-link">Listings</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="agents.php" class="nav-link">Agents</a>
                    </li>
                </ul>

                <ul class="navbar justify-content-end">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i>Welcome [Richard]
                        </a>
                        <div class="dropdown-menu">
                            <a href="index.php" class="dropdown-item">
                                <i class="fas fa-user-circle"></i> Profile
                            </a>
                            <a href="index.php" class="dropdown-item">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <i class="fas fa-user-times"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-danger text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <i class="fas fa-user-lock"></i> ADMIN AREA
                    </h1>
                </div>
            </div>
        </div>
    </header>
    
    <form action="" method="post">
    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">

                    <div class="col-md-3">
                        <a href="index.php" class="btn btn-light btn-block">
                            <i class="fas fa-arrow-left"></i> Back To Dashboard
                        </a>
                    </div>
            </div>
        </div>
    </section>
<?php

$id = $_GET['id'];

$result = getview($id);
//var_dump($result);
if($result){

    while ($row = mysqli_fetch_assoc($result)){ ?>
       
          
    <!--- Details -->
    <section id="details">
        <div class="container">
            <div class="row">
              <div class="col">
                  <div class="card">
                      <div class="card-header">
                          <h4>View Listing</h4>
                      </div>
                      <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" name="name" disabled value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">Adress</label>
                                <input type="text" class="form-control"name="address" value="<?php echo $row['address']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="title">Price</label>
                                <input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="bed">Number of Bed</label>
                                <input type="text" class="form-control" name="price" value="<?php echo $row['bed']; ?>" disabled>
                            </div>
                            <div class="form-group">
                            <label for="bathroom">Number of Bathroom</label>
                            <input type="text" class="form-control" name="price" value="<?php echo $row['bathroom']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_path" name="image_path" disabled>
                                    <label for="image_path" class="custom-file-label">Choose File</label>
                                </div>
                                <small class="form-text text-muted">Max Size 3mb</small>
                            </div>
                            <div class="form-group">
                                <label for="body">Description</label>
                                <textarea name="description" id="description" class="form-control" disabled><?php echo $row['description']; ?></textarea>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </section>
    </form>
<?php


}
}        
    
?>                        

    <!---FOOTER-->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        copyright &copy; <span id="year"></span> REAL ESTATE LTD
                    </p>
                </div>
            </div>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
</body>
</html>
