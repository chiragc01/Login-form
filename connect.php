<?php
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $Address = $_POST['Address'];
      $Password = $_POST['Password'];



      // databbse connection
      $conn = new mysqli('localhost:3307','root','chirag2607','login_form');
      if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
      } else {
        $stmt = $conn->prepare("insert into form( name, email, number, Address, Password) values(?,?,?,?,?)");
        $stmt->bind_param("ssiss",$name,$email,$number,$Address,$Password);
        $execval = $stmt->execute();
        echo $execval;
        echo"registration successfull";
        $stmt->close();
        $conn->close();
      }

?>



