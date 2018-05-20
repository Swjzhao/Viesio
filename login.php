<?php
  include_once 'header.php';
?>
<?php

    include 'driver.php';
    if(isset($_POST['submit'])){
      $email =  mysqli_real_escape_string($connect, $_POST['email']);
      $passwd =  mysqli_real_escape_string($connect, $_POST['pass']);

      $statement = "SELECT * FROM USER
      WHERE email = '$email'";
      $result = mysqli_query($connect, $statement);
      $row = mysqli_num_rows($result);
      if ($row < 1){
        echo "<script type='text/javascript'>alert('Your Username or password is incorrect');</script>";
        header("Location: login.php?login=error");
        exit();
      }else{
        if($row = mysqli_fetch_assoc($result)){
          $hashedpasswd =  password_verify($passwd, $row['passwd']);
          if(!$hashedpasswd){
            echo "<script type='text/javascript'>alert('Your Username or password is incorrect');</script>";
            header("Location: login.php?login=error");
            exit();
          }else if($hashedpasswd){
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['first'];
            $_SESSION['lname'] = $row['last'];
            $_SESSION['email'] = $row['email'];
            header("Location: dashboard.php");
            exit();
          }
        }

      }
      header("Location: index.php");
      exit();
    }else{

        header("Location: index.php");
        exit();
    }

?>
