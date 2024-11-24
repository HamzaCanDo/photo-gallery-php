<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check === false) {
    die("File is not an image.");
}

// Check if file already exists
if (file_exists($target_file)) {
    die("Sorry, file already exists.");
}

// Check file size (5MB limit)
if ($_FILES["image"]["size"] > 5000000) {
    die("Sorry, your file is too large.");
}

// Allow certain file formats
if(!in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
    die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
}

// Check if $uploadOk is set to 0 by an error
if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    die("Sorry, there was an error uploading your file.");
}

// Redirect back to index.php
header("Location: /index.php");
?>
