<?php

$mysqli = new mysqli("localhost", "root", "", "user1");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$data = $mysqli->query("SELECT * FROM users ORDER BY id ASC");

print_r($data);

while ($obj = $data->fetch_object()) {
    
    echo '<br />';
    echo $obj->id.'. ';
    echo $obj->username.'. ';
    echo $obj->created_at.'...';
    
} 

