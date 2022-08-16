<?php

  
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_db = "base";
 
//error_reporting(0);
  
  $connection = new mysqli($db_host, $db_user,$db_password,$db_db );

   
  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;


if(isset($_POST['backward'])) {
        $backward = $_POST['backward'];
        $query = "INSERT INTO dir (dir)  VALUES('$backward')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                echo 'Moving Backward';
            } else {
                echo 'Failed';
            }
    } elseif(isset($_POST['left'])) {
        $left = $_POST['left'];
        $query = "INSERT INTO dir (dir) VALUES('$left')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                echo ' Moving  Left';
            } else {
                echo 'Failed';
            }
    } elseif(isset($_POST['stop'])) {
        $stop = $_POST["stop"];
        $query = "INSERT INTO dir (dir) VALUES('$stop')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                echo 'Stopped Now';
            } else {
                echo 'Failed ';
            }
    } elseif(isset($_POST['right'])) {
        $right = $_POST["right"];
        $query = "INSERT INTO dir (dir) VALUES('$right')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                echo ' Moving Right';
            } else {
                echo 'Failed';
            }
    } elseif(isset($_POST['forward'])) {
        $forward = $_POST['forward'];
        $query = "INSERT INTO dir (dir) VALUES('$forward')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                $last_id = $conn->insert_id;
                echo ' Moving Forward' ;
            } else {
                echo 'Failed ';
            }
    }




?> 
