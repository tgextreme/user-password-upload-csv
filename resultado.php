<?php
@session_start();

if(isset($_SESSION["usuario"])){
    
    $uploaddir = '';
    $uploadfile = $uploaddir . basename($_FILES['archivoImg']['name']);

    echo "<p>";

    if (move_uploaded_file($_FILES['archivoImg']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Upload failed";
    }

?>


<?php


}
?>