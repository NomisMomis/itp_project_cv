<!--*
 * User Sign in
 *
 * Date e.g. 21/3/2016
 *
 * @reference http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html
 *
 -->
 
<!-- PHP code to send user information to database-->
<?php
 session_start();
  include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
 {
  header("Location: home.php");
 }
  if(isset($_POST['btn-login']))
   {
    $email = mysql_real_escape_string($_POST['email']);
    $upass = mysql_real_escape_string($_POST['pass']);
    $res=mysql_query("SELECT * FROM users WHERE email='$email'");
    $row=mysql_fetch_array($res);
     if($row['password']==md5($upass))
     {
      $_SESSION['user'] = $row['user_id'];
      header("Location: home.php");
    }
     else
    {
     ?>
        <script>alert('Wrong Credentials!');</script>
        <?php
   }
 
 }
  ?>
<!-- End of PHP  -->



<!DOCTYPE html>
<html>

<head>
 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>MyTvTimetable - You one stop shop for viewing queries</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css" />
    <link rel="stylesheet" href="CSS/backgroundimage.css" type="text/css" />
    <style>
     
    </style>
</head>
 
<body>
 <center>
     <div id="login-form" alt="login form">
      <form method="post">
        <table align="center" width="30%" border="0">
           <tr>
             <td><label>Email:<input type="text" name="email" placeholder="Your Email" required alt = "email field"/> </label></td>
          </tr>
          
           <tr>
             <td><label>password: <input type="password" name="pass" placeholder="Your Password" required alt="password"/></label></td>
           </tr>
           
            <tr>
              <td><button type="submit" name="btn-login" alt="sign in button">Sign In</button></td>
            </tr>
            
             <tr>
               <td><a href="register.php" alt="sign up button">Sign Up Here</a></td>
             </tr>
          
       </table>
     </form>
   </div>
 </center>
</body>
</html>