<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title></title>
     
      <?php
         $conn = mysql_connect('localhost', 'root', ''); //w3schools, youtube
         $db   = mysql_select_db('c9');
         
         $username = mysql_real_escape_string( $_POST["username"] );
         $password = mysql_real_escape_string( md5($_POST["password"]) );
         
         $sql = "INSERT INTO users VALUES('$username', '$password')" ;
         
         if(mysql_query($sql) ) {
           echo "Inserted Successfully";
         }
         else {
           echo "Insertion Failed";
         }
         ?>
   </head>
   <body>
      <div id="wrapper">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <fieldset>
               <legend>Register Form</legend>
               <div>
                  <input type="text" name="username" placeholder=
                     "Enter Username" /><span class="error">* <?php echo $usernameErr;?></span>
               </div>
               <div>
                  <input type="text" name="password" placeholder=
                     "Enter Password"/><span class="error">* <?php echo $passwordErr;?></span>
               </div>
               <input type="submit" name="enter" value="Sign-Up" />
            </fieldset>
         </form>
      </div>
   </body>
</html>