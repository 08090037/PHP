<?php
    error_reporting();
    session_start();
    if(!isset($_SESSION["conter"]))
    {
        $_SESSION["conter"]=1;
    }
    else
    {
        $_SESSION["conter"]++;
    }
    echo "登入{$_SESSION["conter"]}人次";
?>