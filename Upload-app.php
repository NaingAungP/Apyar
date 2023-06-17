 <?php
if (is_uploaded_file($_FILES['msk']['tmp_name'])) {
    $uploads_dir = 'file/';  //create this folder in where this file exist
    
    if (!file_exists($upload_dir)) {
        mkdir($uploads_dir);
     }
    $tmp_name = $_FILES['msk']['tmp_name'];
    $file_name = $_FILES['msk']['name'];
   
    move_uploaded_file($tmp_name, $uploads_dir.$file_name);
    
    echo "Success";
    
} else { 

    echo "Failed";
    echo $tmp_name;
    
}

?>