
<?php
  include_once 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link href='createuser.css' rel='stylesheet' type='text/css' />
  </head>
  <body>
  <div id="wrapper" class = "wrapper">

    <div id = "background">
      <img src = "Graphics/socialnetwork.png" />
    </div>

    <div id = "content">
      <form action="createuser.php" method="POST">
        <div id = "fleft">
          <b id = "welcome"> <i> Welcome </i> </b>
        </div>
        <div id = "fright">
          <div id = "frightcontent">
            <label for = "title" name = "title" class = "title"><b>Create a Free Account</b></label>
            <div id = "uname">
              <input class = "field" type = "text" placeholder="First Name" name = "fname" id ="fname" required>
              <input class = "field" type = "text" placeholder="Last Name" name = "lname" id ="lname" required>
            </div>
            <input class = "field" type = "email" placeholder="Email Address" name = "email" id ="email" required>
            <!--  <input class = "field" type = "text" placeholder="Enter Username" name = "user" id ="user" required> -->

            <input class = "field" type = "password" placeholder = "Enter Password" name = "pass" id ="pass" required>
            <input class = "field" type = "password" placeholder = "Confirm Password" name = "cpass" id ="pass" required>


            <button name = "submit" id = "loginbutton" type = "submit">Continue</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>
