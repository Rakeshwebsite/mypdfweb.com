
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://localhost/mail/trailcss.css">
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
  <div class="content" style="margin-left: 30%;padding: 30px;" id="mydiv">
    <h3 align="center" >LOGIN</h3>
    <br><br>
 <form method="post">

                       <div class="form-group required">  
              <lSabel for="username" style="color:white;"> <b>USER NAME</b> </lSabel>  
              <br>
             <input class="form-control text-lowercase" type="text" style="border-color: rgba(0, 0, 0, 0);color: white; border-bottom-color:white; background-color: none;background: rgba(0, 0, 0, 0); "  id="username" required="" name="t1" value="" >  
               </div>
               <br><br>
                 <div class="form-group required">  
    <label class="d-flex flex-row align-items-center" for="password" style="color:white;"> <b>Password </b>  
  <br>
<input type="password" class="form-control text-lowercase" required=""  id="password" name="t2" value="" style="border-color: rgba(0, 0, 0, 0); color:white;  border-bottom-color:white; background-color: none;background: rgba(0, 0, 0, 0)">  
       </div>  <br><br>
       <button name="login" style="margin-left: 40px;">Login</button>
</form>
  </div>
</div>


<?php




  if(isset($_POST["t1"]))
  {
    if(isset($_POST["login"]))
  {
    
    $na=$_POST["t1"];
    $pw=$_POST["t2"];
  
     
    //$_SESSION["user"]=$na;
    
  
 

if($na=="DOT" &&  $pw=="student")
      {
        
          
      
        echo "  <div class='content' style='margin-top: 200px;margin-left: 150px;font-size:30px;'>
    <strong>Success!</strong> Login is success👍🥳🎉🎊.
  </div>";
    header("Location:http://localhost/mail/pdfupload.php");

      }
      
      else
      {
        echo "";
        echo " ";

  echo "<script> alert('Wrong! ❌❌❌❌❌❌please enter  correct user name and password.');</script>";
      }
  }
  
}
?>

</body>
</html>