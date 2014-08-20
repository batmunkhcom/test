<?php
include("includes/connect.php");

print_r($_GET);
echo '<h2>POST</h2>';
print_r($_POST);

if(strlen($_POST['username']) < 5){
    echo 'username 5 bolon tuunees ih temdegt bh yostoi!';
}elseif($_POST['pass1'] != $_POST['pass2']){
    echo 'Nuuts ugs hoorondoo tohirohgui bna';
}else{
    
    $query = "INSERT INTO users (username,pass,created_at) "
            . " VALUES('".  addslashes($_POST['username'])."','".md5($_POST['pass1'])."','".date("Y-m-d H:i:s")."') ";
//            . " VALUES('".$_POST['username']."','".md5($_POST['pass1'])."',NOW()) ";
    
    $mysqli->query($query) OR die("Burtgel amjiltgui.. ".  mysqli_error($mysqli));
    echo 'Amjilttai burtgelee...';
}