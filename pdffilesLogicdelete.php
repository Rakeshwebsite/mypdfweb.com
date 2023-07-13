<?php
/*      
$status=unlink('data.txt');    
if($status){  
echo "File deleted successfully";    
}else{  
echo "Sorry!";    
}  */
?>  










   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'cseb');

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    $subname=$_POST['subname'];
    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    
    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
             // $sql="insert into pdfdb(filename,size)values('$filename',$size')";
            $subname=$_POST['subname'];
              $sql="insert into pdfdb(filename,size,sub)values('$filename','$size','$subname')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
                 echo "  <div class='alert alert-success'>
    <strong>Success!</strong> Login is success👍🥳🎉🎊.
  </div>";
  
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}




?>
<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'krc');

$sql = "SELECT * FROM studentregister";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php
// Downloads files
if (isset($_GET['file_name'])) {
    $name = $_GET['file_name'];
    echo "$name";
    // fetch file to download from database
$conn = mysqli_connect('localhost', 'root', '', 'krc');

    $sql = "SELECT * FROM studentregister ";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($result))
    {
        if($row['filename'] == "$name" ){
        $filepath = 'uploads/' . $row['filename'];
        /*if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $row['filename']));
        readfile('uploads/' . $row['filename']);
       }*/
     }
     $status=unlink($filepath.'.pdf');    
if($status){  
echo "File deleted successfully";    
}else{  
echo "Sorry!";    
}  

    }
}
/* header("Content-Type: application/octet-stream");

$file =$row["filename"].".pdf";
header("Content-Disposition: attachment; filename=" . urlencode($file));   
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));
flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp);
 */

?>