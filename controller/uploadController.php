<?php
    function getUserIP()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'Unknown IP Address';

        return $ipaddress;
    }

    $user_ip = getUserIP();
    // Get reference to uploaded image
    $image1 = $_FILES["image1"];
    $image2 = $_FILES["image2"];
    $image3 = $_FILES["image3"];
    $image4 = $_FILES["image4"];
    $pdf = $_FILES["file-upload"];

    $file_path = '../uploads/'.time();
    if(!is_dir($file_path))
        mkdir($file_path, 0777, true);
    // Move the temp image file to the images/ directory
    move_uploaded_file(
        // Temp image location
        $image1["tmp_name"],
        // New image location, __DIR__ is the location of the current PHP file
        __DIR__ ."/". $file_path ."/". time() ."_".$image1["name"]
    );
    move_uploaded_file(
        // Temp image location
        $image2["tmp_name"],
        // New image location, __DIR__ is the location of the current PHP file
        __DIR__ ."/". $file_path ."/". time() ."_".$image2["name"]
    );
    move_uploaded_file(
        // Temp image location
        $image3["tmp_name"],
        // New image location, __DIR__ is the location of the current PHP file
        __DIR__ ."/". $file_path ."/". time() ."_".$image3["name"]
    );
    move_uploaded_file(
        // Temp image location
        $image4["tmp_name"],
        // New image location, __DIR__ is the location of the current PHP file
        __DIR__ ."/". $file_path ."/". time() ."_".$image4["name"]
    );
    move_uploaded_file(
        // Temp image location
        $pdf["tmp_name"],
        // New image location, __DIR__ is the location of the current PHP file
        __DIR__ ."/". $file_path ."/". time() ."_".$pdf["name"]
    );

    echo json_encode(true);
?>