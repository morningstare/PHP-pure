<?php
$uploadDir = "uploads/";

if (!empty($_FILES["files"]["name"])) {
    $fileCount = count($_FILES["files"]["name"]);

    for ($i = 0; $i < $fileCount; $i++) {
        $fileName = $_FILES["files"]["name"][$i];
        $fileTmp = $_FILES["files"]["tmp_name"][$i];
        $fileDestination = $uploadDir . $fileName;

        if (move_uploaded_file($fileTmp, $fileDestination)) {
            echo "File uploaded successfully: " . $fileName . "<br>";
        } else {
            echo "Error uploading file: " . $fileName . "<br>";
        }
    }
}
?>