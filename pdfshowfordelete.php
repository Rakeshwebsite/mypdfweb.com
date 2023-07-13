<?php  session_start();  ?>
<?php include 'pdffilesLogicdelete.php';?>
<?php   
 //include 'connection.php';  

  $conn=mysqli_connect("localhost","root","");
  mysqli_select_db($conn,"cseb");

 $query = "select * from pdfdb";  
 $run = mysqli_query($conn,$query);  
 ?>  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
<!--  <link rel="stylesheet" href="style.css">-->
  <title>Download files</title>
</head>
<body>
<style type="text/css">
    table, th, td {
  border: 0px solid black;
}

</style>
<style type="text/css">
    .title-word {
  animation: color-animation 4s linear infinite;
}

.title-word-1 {
  --color-1: #DF8453;
  --color-2: #3D8DAE;
  --color-3: #E4A9A8;
}

.title-word-2 {
  --color-1: #DBAD4A;
  --color-2: #ACCFCB;
  --color-3: #17494D;
}

.title-word-3 {
  --color-1: #ACCFCB;
  --color-2: #E4A9A8;
  --color-3: #ACCFCB;
}

.title-word-4 {
  --color-1: #3D8DAE;
  --color-2: #DF8453;
  --color-3: #E4A9A8;
}

@keyframes color-animation {
  0%    {color: var(--color-1)}
  32%   {color: var(--color-1)}
  33%   {color: var(--color-2)}
  65%   {color: var(--color-2)}
  66%   {color: var(--color-3)}
  99%   {color: var(--color-3)}
  100%  {color: var(--color-1)}
}

/* Here are just some visual styles. 🖌 */

.container {
  display: grid;
  place-items: center;  
  text-align: center;
  height: 100vh
}

.title {
  font-family: "Montserrat", sans-serif;
  font-weight: 800;
  text-transform: uppercase;
}
</style>

<div style='width:20%;height:100%; float: left;background-color:#ADD8E6;' class="mybgvi"><br><br><br><img style="margin-left: 15px;height:500px;width:230px;" src="http://localhost/mail/cseimg.jpeg"> </div>
<div style="width:60%;height:100%; float: left;">
<h2 class="title" style="font-size:70px;" align="center">
    <span class="title-word title-word-1">CSE-</span>
    <span class="title-word title-word-2">B</span>
    <span class="title-word title-word-3">Offical</span>
    <span class="title-word title-word-4">page</span>
  </h2>
<div style="border-color: white;margin-top:50px; float: right;">

<form style="border-color: white; " method="post">
  <input style="float:left;height:35px;" type="text" placeholder="Search.." name="search">
  <button style="border-color:;" type="submit" name="submit"><img style="width:30px;height:30px;" src="pdfserching.jpeg"></button>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


      <?php   
      if(!isset($_POST['submit'])){
      $ii=1;  
      echo "<table style='border-color: white;margin-left:150px;'>";
      echo "<tr>";
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {
                     
                     echo " <td style='width:150px;'><a href='pdfdeleie.php?file_name=".$result['filename']."' rollno='btn'><img src='pdfimg.jpeg' width='70px'><br>".$result['filename']."<br>SUB:".$result['sub']."</td>  ";
                          if($ii==4){
                            echo "</tr>";
                            $ii=0;
                          }  
                          $ii++;
         

                }  
             }
                
                echo "</table>";


    }

    if(isset($_POST['submit']))
    {
          $find=$_POST['search'];   
          $ii=1;  
      echo "<table style='border-color: white;margin-left:150px;'>";
      echo "<tr>";
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {
                     if($result['sub']==$find){
                     echo " <td style='width:150px;'><a href='pdfdownload.php?file_name=".$result['filename']."' rollno='btn'><img src='pdfimg.jpeg' width='70px'><br>".$result['filename']."<br>SUB:".$result['sub']."</td>  ";
                          if($ii==4){
                            echo "</tr>";
                            $ii=0;
                          }  
                          $ii++;
         
                                 }
                }  
             }
                
                echo "</table>";


 
    }



      ?>  
      </div>
<style>
.mybgvi{
  background-image: url('http://localhost/mail/pdf.gif');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>  

<div class="mybgvi" style='width:20%;height:100%; float:right;background-color:#ADD8E6;'>hiiii    </div>


</body>
</html>