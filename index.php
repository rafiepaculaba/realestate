<?php
require_once ("admin/target.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dream House</title>
</head>
<body id="home" data-spy="scroll" data-target="#main-nav">
    
    <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
        <div class="container">
            <a href="#home" class="navbar-brand">
<!--- logo area-- -->
                <h3 class="d-inline align-middle">Dream House</h3>
            </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#listings" class="nav-link">New Listings</a>
                </li>
                <li class="nav-item">
                    <a href="#agents" class="nav-link">Meet The Agents</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>

        </div>
    </nav>
<section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg text-center">
                    <h1 class="display-2 mt-5 pt-5">
                        Get your Dream House
                    </h1>
                    <p class="lead">Get real advice from real people!</p>
                    <a href="#agents" class="btn btn-outline-secondary btn-lg text-white">
                        <i class="fas fa-arrow-right"></i>Get more info
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="listings" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-columns">

                <?php
                        
                        $result = getLists();
                        //var_dump($result);
                       if($result){

                            while ($row = mysqli_fetch_assoc($result)){ ?>
                
                    <div class="card">
                        <img src="img/<?php echo $row['image_path']; ?>" alt="" class="img-fluid card-img-top">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['name']; ?></h4>
                            <p class="lead"><?php echo "$".$row['price']; ?></p>
                            <hr>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                        </div>
                    </div>

                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- AGENTS -->
<section id="agents" class="my-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header mb-5">
                    <h1 class="text-primary pb-3">
                        Meet The Agents
                    </h1>
                    <p class="lead">
                        Real People, Real Advice
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
        <?php
                        
                        $result = getAgents();
                        //var_dump($result);
                       if($result){

                            while ($row = mysqli_fetch_assoc($result)){ ?>
                
                   
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="img/<?php echo $row['avatar']; ?>" alt="" class="img-fluid rounded-circle-w50 mb-3">
                        <h3><?php echo $row['name']; ?></h3>
                        <h5 class="text-muted"><?php echo $row['phone']; ?></h5>
                        <div class="d-flex justify-content-center">
                            <div class="p-4">
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
            <?php
                            }
                        }
                    ?>
         
        </div>
    </div>
</section>

<!--- NEWSLETTER -->
<section id="newsletter" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control form-control-lg mb-resp" placeholder="Enter Name">
            </div>
            <div class="col-md-4">
                <input type="email" class="form-control form-control-lg mb-resp" placeholder="Enter Email">
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary btn-lg btn-block">
                    <i class="fas fa-envelope-open-o"></i>Subscribe
                </button>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h3>Get In Touch</h3>
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur, quas.</p>
                <form>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                        </div>
                        <textarea type="text" class="form-control" placeholder="Massage" rows="5"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block btn-lg">
                </form>
            </div>
            <div class="col-lg-3 align-self-center">
                <img src="img/mlogo.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!--- FOOTER  -->
<footer id="main-footer" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md ml-auto">
                DREAM HOUSE LTD
                <p class="lead">
                    Copyright &copy; 2021
                    <span id="year"></span>
                </p>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
<script>
    //  Init Scrollspy
    $('body').scrollspy({target: '#main-nav'});

    //Smooth Scrolling
    $('#main-nav a').on('click', function(e) {
        //check for a hash value
        if(this.hash !== '') {
            //Prevent default behavior
            e.preventDefault();

            // Store Hash
            const hash = this.hash;

            // Animate smooth scroll
            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 800, function() {
            // Add hash to URL after scroll
            window.location.hash = hash;
            });
        }
        });

</script>
</body>
</html>