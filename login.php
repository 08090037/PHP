<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8"); //中文碼
    $result=mysqli_query($conn, "select * from user"); //資料庫找user
    
    $login=FALSE;
    while ($row=mysqli_fetch_array($result)) {
        if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"]) 
        $login=TRUE;  //判斷帳密是否正確
    }
    
    if  (!$_POST["id"] || !$_POST["pwd"]){
           echo "請輸入帳號/密碼"; 
           echo "<meta http-equiv='refresh' content='3;url=login.html''>";    //輸入錯誤跳回前頁         
    }
    elseif ($login==TRUE){
      //echo "歡迎登入"; 
      session_start();
      $_SESSION["id"]=$_POST["id"];  
      echo "<meta http-equiv='refresh' content='0;url=bulletin.php''>"; //登入成功進入bulletin
    }
    else{
      echo "帳號密碼錯誤";
      echo "<meta http-equiv='refresh' content='3;url=login.html''>";    //輸入錯誤跳回前頁      
    }
?>