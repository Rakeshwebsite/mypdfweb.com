
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://localhost/mail/trailcss.css">
  <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aqarium</title>

</head>
<style type="text/css">
    
.form-control:focus {  
    color: #000;  
    background-color: #fff;  
    border: 2px solid #E8D426;  
    outline: 0;  
    box-shadow: none;  
}  
.btn {  
  background:   #000080;  
  border: #E8D426;  
}  
.btn:hover {  
  background: #7CA1FF;  
  border: #E8D426;  
}  

</style>
<body>

  <div class="hero">
  <div class="fish">
    <img class="f1" src="http://localhost/mail/fish2.png">
  <img class="f2" src="http://localhost/mail/fish2.png">
    <img class="f3" src="http://localhost/mail/fish2.png">
    <img class="f4" src="http://localhost/mail/fish2.png">
    <img class="f5" src="http://localhost/mail/fish2.png">

  </div>
   <div class="bub">
     <img class="b1" src="http://localhost/mail/bubble.png">
    <img class="b2" src="http://localhost/mail/bubble.png">
    <img class="b3" src="http://localhost/mail/bubble.png">
   </div>
 <div class="container" style="font-size: 20px;">
      <div class="row">
        <form action="pdfmyshareindex.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          Subject<input type="text" name="subname" placeholder="ENTER in shortfor(eg:CN,IP,DAA..)"> <br>
          <button style="border: 1.5px solid #fff;border-radius: 20px;" name="save">upload</button>
        </form>
      </div>
    </div>
</div>



</body>
</html>