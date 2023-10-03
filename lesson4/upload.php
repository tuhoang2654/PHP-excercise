<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image";
            $uploadOk = 0;
        }
    }
    //check if file already exists
    if(file_exists($target_file)) {
        echo "Sorry, file already exists";
        $uploadOk = 0;
    }
    // check file size
    if($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large";
        $uploadOk = 0;
    }
    // allow certain file format
    if($imageFileType != "jpg" 
    && $imageFileType != "png" 
    && $imageFileType != "gif" 
    && $imageFileType != "jpeg") {
        echo "Sorry, only jpg,jpeg,gif,png files are allowed";
        $uploadOk = 0;
    }
    if($uploadOk == 0) {
        echo "Sorry, your file was not uploaded";
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "sorry, there was an error uploading your file"
        }
    }
?>