<?php
  include_once 'header.php';
?>
<!DOCTYPE HTML>
<html>

  <head>
    <link href='global.css' rel='stylesheet' type='text/css' />
    <link href='landinghead.css' rel='stylesheet' type='text/css' />
    <link href='landingbody.css' rel='stylesheet' type='text/css' />

    <style>


    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="jquery.cycle.js"></script>

        <script>
        $(document).ready(function() {

            $('.socialimg').cycle({
            fx:    'fade',

          });

        });

        </script>
        </head>
  <body>

    <div id = "wrapper" >
      <div id ="fborder">
        <div id = "head">

          <p class = "top">
            [Logo]
          </p>
          <div class = "RH">
            <p class = "top">

              <a href = "#body1">Why?</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href = "#body2">Features</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button id= "create"  onclick="location.href = 'createuserpage.php';">  Create  </button>
            </p>
          </div>

        </div>
      </div>

      <div id ="first">

        <div id = "loginl">
          <p class = "fp"> Secure </p>
          <p class = "fp"> Clean </p>
          <p class = "fp"> Explore </p>
        </div>
        <div class = "logins">
        </div>
        <div id = "loginm">
        </div>
        <div class = "logins">
        </div>
        <div id = "loginrbg">
        </div>
        <div id = "loginr">

          <form action = "login.php" method = "POST">
            <label for = "user" name = "user"><b>Username</b></label>

            <input class = "field" type = "email" placeholder="Enter Email" name = "email" id ="email" required>
            <div class = "break"></div>
            <div class = "break"></div>
            <label for = "pass" name = "pass"><b>Password</b></label>

            <input class = "field" type = "password" placeholder = "Enter Password" name = "pass" id ="pass" required>

            <label style="font-size:50%; float:Right"> forgot password? </label>
            <div class = "break"></div>
            <div class = "break"></div>
            <div class = "break"></div>
            <button id = "loginbutton" type = "submit" name = "submit" >Login</button>
            <input type = "checkbox" checked = "checked" name = "remember">

            <label> Remember me </label>

            <script src="login.js"></script>
          </form>


        </div>
        <div id = "loginrs">
        </div>

      </div>
        <div class = "divi" id = "title">
          <div class = "content" id = "titlecontent">
            <p>Your Entire Social Media History, Organized into one place  </p>
          </div>
        </div>
        <div class = "divi" id = "body1">
          <div class = "content">
            <div class = "bodyl">
              <div id = "bodytext">
                <h1> Why is it important? </h1>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;
                  Social media has become an inseparable aspect of life but yet we often neglect the significance of joining this open network. Bad decisions and posts can haunt in the future in job search, scholarships and other endeavors, however people can sometimes be unaware that their posts contain controversial or harmful content.
                  (Name) that will analyze your appearance to the public based on past activity and track your record.
                </p>
              </div>
            </div>
            <div class = "bodyr">
              <div class = "socialimg">
                <img class = "social" src = "Graphics/social1.png" />
                <img class = "social" src = "Graphics/social2.png" />
              </div>
            </div>
          </div>
        </div>
        <div class = "divi" id = "body2">
          <div class = "content">
          </div>
        </div>
        <div class = "divi" id = "body3">
          <div class = "content">
            <div class = "bodyl">

              <img src = "Graphics/screenshot.png" style = "width:32.5vw"/>

            </div>
            <div class = "bodyr">
              <div id = "tablediv">
                <table>
                  <tr>
                    <td class = "feature">
                      Track Record
                    </td>
                    <td>&#10004;
                    </td>
                  </tr>
                  <tr>
                    <td class = "feature">
                      Flagged posts
                    </td>
                    <td>&#10004;
                    </td>
                  </tr>
                  <tr>
                    <td class = "feature">
                      Analysis
                    </td>
                    <td>&#10004;
                    </td>
                  </tr>
                  <tr>
                    <td class = "feature">
                      Graph Distribution
                    </td>
                    <td>&#10004;
                    </td>
                  </tr>
                  <tr>
                    <td class = "feature">
                      Privacy Protected
                    </td>
                    <td>&#10004;
                    </td>
                  </tr>
                  <tr>
                    <td class = "feature">
                      FREE
                    </td>
                    <td>&#10004;
                    </td>
                  </tr>

                </table>
              </div>
            </div>
          </div>
        </div>
        <div class = "divi" id = "end">
          <div  id = "last" >
            <p style="font-size:200%; font-weight:bold;">
              Our Mission
            </p>
            <br />
            <p>
              Viesio’s mission is to assist people in recognizing their image presented to the world
            </p>
            <br />
            <p>
              Privacy Policy &nbsp; Find us on Facebook
            </p>
          </div>
        </div>
    </div>
  </body>
</html>
