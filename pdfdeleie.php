<?php  session_start();  ?>
<?php

echo "hiiiiiiiiiiiiiiiiiiiiii";
if (isset($_GET['file_name'])) {
    $name = $_GET['file_name'];
    echo "$name";
    // fetch file to download from database


//$file='http://localhost/mail/uploads/'.$name;
//echo "$file";
$status=unlink( "uploads/".$name);
    

} 
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'cseb');

    $sql = "DELETE FROM pdfdb WHERE filename='$name'";
    mysqli_query($conn, $sql);
if($status){  
    header('location:http://localhost/mail/pdfshowfordelete.php'); 
}
else{  
echo "Sorry!";    
}  

?>
<?php


?>