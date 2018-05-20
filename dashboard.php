<?php
  include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link href='global.css' rel='stylesheet' type='text/css' />

  <link href='dashboard.css' rel='stylesheet' type='text/css' />
  <script> </script>
  <script src="dashboard.js"> </script>
</head>
<body>

  <div id = "wrapper">
    <div id ="fborder">
      <div id = "head">


        <div class = "RH">

            <img src = "Graphics/person.png" height="40vh"/>

        </div>

      </div>
    </div>
    <div id = "left">
      <div id = "ltop">
        <p class = "top">
          [Logo]
        </p>
        <br />
        <button class="tab active" onclick="switchview(event, 'dashb')">Dashboard</button>
        <button class="tab" onclick="switchview(event, 'prof')">Profile</button>

      </div>
      <div id = "ldiv">
      </div>
      <div id ="lbot">
        <label class = "bot"> Privacy Policy </label>
        <form action = "logout.php" method="POST">
          <button type = "submit" name = "submit" id="logout">Logout</button>
        </form>
      </div>
    </div>
    <div id = "dashb" class = "tabc">
      <div id = "dashbl">
        <?php
          if(isset($_SESSION['id'])){
            echo "<p id='name'>".$_SESSION['fname']."&nbsp;&nbsp;&nbsp;".$_SESSION['lname']."</p>";
          }
         ?>

        <img src="Graphics/PieChart.png" height = "200vh" />
        <img src="Graphics/Histogram.png" height = "200vh" />
      </div>
      <div id = "dashbr">
        <h1> Analysis </h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a sodales mi, ut efficitur lorem. Morbi ut luctus lorem, vitae tincidunt ligula. Aliquam consectetur feugiat neque, ut suscipit purus sollicitudin non. In rhoncus sodales erat vitae laoreet. Donec quis molestie ex, a mattis neque. Aenean lorem sem, tincidunt sit amet quam non, mattis feugiat metus. Sed egestas ipsum in eros lobortis vulputate et vel purus. Praesent a massa ligula. Mauris convallis risus eget ante iaculis, at volutpat augue consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum, nibh sit amet faucibus tristique, nunc dolor blandit eros, sed blandit mi nulla id justo. Donec nec massa pulvinar, sodales felis tristique, maximus quam. In suscipit, dolor in eleifend accumsan, tellus dolor ullamcorper tortor, sed imperdiet enim lectus ac augue. Cras bibendum convallis turpis, id pharetra tellus suscipit ac.
        </p>
        <p>Donec lacinia et nulla sit amet aliquet. Etiam sit amet porttitor justo. Suspendisse aliquam augue sit amet imperdiet maximus. Proin id nulla eget sem imperdiet posuere lacinia eget magna. Ut leo nunc, pretium vitae blandit vitae, rutrum eget odio. Vestibulum convallis nec mi et venenatis. Praesent sit amet aliquam felis. Quisque ac mauris et sapien tincidunt sodales a eget enim.
        </p>
      </div>
    </div>
    <div id = "prof" class = "tabc">
      <div id = "profl">
        <div id = "profimg">
          <img src="Graphics/person.png" />
        </div>
        <?php
          if(isset($_SESSION['id'])){
            echo "<p id='name'>".$_SESSION['fname']."&nbsp;&nbsp;&nbsp;".$_SESSION['lname']."</p>";
          }
         ?>
        <table>
          <tr>
            <td class = "lc">
              Account
            </td>
            <td class = "lalign">
              <?php
                  echo "<input class = 'field' type = 'text' value='".$_SESSION['fname']."' name = 'fname' id ='fname'>";
                  echo "<input class = 'field' type = 'text' value='".$_SESSION['lname']."'name = 'lname' id ='lname'>";
              ?>
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td>
              <?php
                echo "<input class = 'field' type = 'text' value='".$_SESSION['email']."' name = 'email' id ='email'>";
              ?>
            </td>
            <td>
            </td>
            <td>
            </td>
          </tr>

          <tr>
            <td>
            </td>
            <td>
              <input class = "field" type = "pass" placeholder="Password" name = "pass" id ="pass" required>
            </td>

          </tr>



          <tr>
            <td class = "lc">
              Social media
            </td>
            <td>
              Connect to Facebook
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td>Connect to Twitter
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td>Connect to Tumblr
            </td>
          </tr>

        </table>
      </div>
      <div id = "profr">
      </div>
    </div>
  </div>
</body>
</html>
