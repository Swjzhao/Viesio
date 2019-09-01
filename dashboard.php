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
  <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
     <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
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
            echo "<p id='name'>".$_SESSION['fname']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['lname']."</p>";
          }
         ?>
        <script>

        anychart.onDocumentReady(function() {
          var data = [
              {x: "Profanity", value: 223553265},
              {x: "Racism", value: 38929319},
              {x: "Sexism", value: 2932248}
            ];

          var chart = anychart.pie();

          chart.title("Recent");
          chart.data(data);

          chart.legend().position("right");
          chart.legend().itemsLayout("vertical");

          chart.container('dashbl');
          chart.draw();

        });


        </script>


      </div>
    <!--  <div id = "dashblb">
          <img src="Graphics/Histogram.png" height = "200vh" />
      </div> -->
      <div id = "dashbr">
        <h1> Analysis </h1>
        <p> Positivity: After analyze your social activities, we find that there is (%%) positive, (%%) neutral and (%%) negative comments. According to this result, your positivity rating from -1.00 to 1.00 is (0.63). You are a/an (adj.) person and we recommend your to (keep/ change) the way you post your comment. (Maybe you want to consider involve some positive comment such as … .)  </p>
        <p> Racism: (%%) of your social post are considered to be racist. （(if 0%)You are not considered as a rasist person based on your social profile）Here are all the comments we found that might be racist. You may consider to change the wording such as changing “niggar” to “black people”. Additionally, (%%)  is considered to be extremely racist. They may have negative impact when you applying a job or applying a learning institution. You may consider either delete them or change them.
        </p>
        <p>
          Profanity: we have highlighted any profane language you used and you can decide what to do with it.
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
