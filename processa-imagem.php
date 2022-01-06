<?php
if(isset($_FILES['file']) and !$_FILES['file']['error']){
    $fname = "18" . ".png";

    move_uploaded_file($_FILES['file']['tmp_name'], "./image" . $fname);
}
echo json_encode("OLA");
?>