<?php

function directoryReader($directory) {
    // Check if the directory exists
    if (!is_dir($directory)) {
        return false;
    }

    // Read all files from the directory
    $files = scandir($directory);

    // Filter out directories and return only image files
    $images = array_filter($files, function($file) use ($directory) {
        $filePath = $directory . '/' . $file;
        return is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
    });

    // Prepend the directory path to each image file name
    $images = array_map(function($file) use ($directory) {
        return $directory . '/' . $file;
    }, $images);

    return $images;
}
?>
