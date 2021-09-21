<?php
function db_con() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "realestate";

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    } 
    
    return $con;

}

// create for listings
if(isset($_POST['add'])){
    addData();
}

// create for listings
if(isset($_POST['addagent'])){
    addAgent();
}



if(isset($_POST['edit'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}


function addData() {
   
    $con = db_con();

    $name           = inputValue("name");
    $address        = inputValue("address");
    $price          = inputValue("price");
    $bed            = inputValue("bed");
    $bathroom       = inputValue("bathroom");
    $image_path     = 1; //upload feature 
    $description    = inputValue("description");

    if($name && $address && $price && $bed && $bathroom && $image_path && $description) {
        $desc=trim($description);

        $query = "INSERT INTO `list` (`id`, `name`, `address`, `bed`, `bathroom`, `price`, `image_path`, `description`, `status`) VALUES 
        (NULL, '$name','$address','$bed','$bathroom','$price','$image_path','$desc','1')";

        if($con->query($query) === TRUE){
            TextMessage("bg-success", "Record Successfully Saved!");
        }else{
            TextMessage("bg-warning", "Sorry, There is an Error");
        }

    } else{
        TextMessage("bg-warning", "Provide Data in the Textbox");
    }
}

function addAgent() {
   
    $con = db_con();

    $name       = inputValue("name");
    $phone      = inputValue("address");
    $avatar     = 1; //upload feature 


    if($name && $phone && $avatar) {

        $query = "INSERT INTO `agent` (`id`, `name`, `phone`, `avatar`,`status`) VALUES 
        (NULL, '$name','$phone','$avatar','1')";

        if($con->query($query) === TRUE){
            TextMessage("bg-success", "Record Successfully Saved!");
        }else{
            TextMessage("bg-warning", "Sorry, There is an Error");
        }

    } else{
        TextMessage("bg-warning", "Provide Data in the Textbox");
    }
}

function inputValue($value){

    $val = trim($_POST[$value]);
    if(empty($val)){
        return false;
    }else{
        return $val;
    }
}


// messages
function TextMessage($class, $message){
    $element = "<h2 class='$class'>$message</h2>";
    echo $element;
}

// get Listings data from mysql database
function getLists(){
    $con = db_con();

    $query = "SELECT * FROM list";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// get Agents data from mysql database
function getAgents(){
    $con = db_con();

    $query = "SELECT * FROM agent";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

function getview($id){
    $con = db_con();
    
  $query = "SELECT * FROM `list` WHERE id=$id";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}



function upload($filename){
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
       $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }

}