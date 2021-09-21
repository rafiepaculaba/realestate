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
    <title>Admin Area - Agents</title>
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
    
    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="add.php" class="btn btn-success btn-block" data-toggle="modal" data-target="#addPostModal">
                        <i class="fas fa-plus"></i> Add Listing
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="addagent.php" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
                        <i class="fas fa-plus"></i> Add Agent
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!---POST-->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Entry</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                        
                        $result = getAgents();
                        //var_dump($result);
                       if($result){

                            while ($row = mysqli_fetch_assoc($result)){ ?>
                           <tr>
                           <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                           <td data-id="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></td>
                           <td data-id="<?php echo $row['id']; ?>"><?php echo $row['phone']; ?></td>
                           <td>
                            <a href="viewagent.php?id=<?php echo $row['id']; ?>" class="btn btn-dark">
                                <i class="fas fa-angle-double-right"></i> More Details
                            </a>
                            </td>
                        </tr>

<?php
                            }

                        }
                    
?>



                               

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center bg-success text-white mb-3">
                        <div class="card-body">
                            <h3>Listings</h3>
                            <h4 class="display-4">
                                <i class="fas fa-folder"></i> 4
                            </h4>
                            <a href="index.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card text-center bg-warning text-white mb-3">
                        <div class="card-body">
                            <h3>Agents</h3>
                            <h4 class="display-4">
                                <i class="fas fa-users"></i> 5
                            </h4>
                            <a href="agents.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---FOOTER-->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                    © REAL ESTARE
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!---MODALS-->
    <!-- ADD POST MODAL -->
    <div class="modal fade" id="addPostModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Post</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Category">Category</label>
                            <select class="form-control">
                                <option value="">Web Development</option>
                                <option value="">Tech Gadgets</option>
                                <option value="">Business</option>
                                <option value="">Healt & Wellness</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image">
                                <label for="image" class="custom-file-label">Choose File</label>
                            </div>
                            <small class="form-text text-muted">Max Size 3mb</small>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="editor1" id="" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD CATEGORY MODAL-->
    <div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Add Category</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control">
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD USER MODAL-->
    <div class="modal fade" id="addUserModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Add User</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirm Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script>
    //Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>