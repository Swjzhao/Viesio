<?php

  include 'driver.php';

  if(isset($_POST['submit'])){

    $fname = mysqli_real_escape_string($connect,$_POST['fname']);
    $lname =  mysqli_real_escape_string($connect,$_POST['lname']);
    $email =  mysqli_real_escape_string($connect,$_POST['email']);
  //  $userid = $_POST['user'];
    $passwd =  mysqli_real_escape_string($connect, $_POST['pass']);
    $cpasswd =  mysqli_real_escape_string($connect,$_POST['cpass']);

    // echo $fname."<br />";
    // echo $lname."<br />";
    // echo $email."<br />";
    // echo $userid."<br />";
    // echo $passwd."<br />";

    //check valid input, should add more later
    if(!preg_match("/^[a-zA-Z]*$/", $fname) ||
      !preg_match("/^[a-zA-Z]*$/", $lname)
    ){
      header("Location: createuserpage.php?create=invalid");
      exit();
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: createuserpage.php?create=invalidemail");
        exit();
    }else{
      $statement = "SELECT * FROM USER
      WHERE email = '$email'";
      $result = mysqli_query($connect, $statement);
      $row = mysqli_num_rows($result);
      if($row > 0){
        header("Location: createuserpage.php?create=emailtaken");
        exit();
      }else{
        //Hash
        $hashedpasswd = password_hash($passwd, PASSWORD_DEFAULT);
        $statement = "INSERT INTO user (first, last,email, userid, passwd)
        VALUES ('$fname', '$lname', '$email', 'none', '$hashedpasswd' )";

        $result= mysqli_query($connect, $statement);
        header("Location: createuserpage.php?create=success");
        exit();
      }
    }


  }else{
      header("Location: index.php");
        exit();
  }
?>
