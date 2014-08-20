home page

<?php


$data = $mysqli->query("SELECT * FROM users ORDER BY id ASC");

print_r($data);

while ($obj = $data->fetch_object()) {
    
    echo '<br />';
    echo $obj->id.'. ';
    echo $obj->username.'. ';
    echo $obj->created_at.'...';
    echo '<a href="delete_user.php?id='.$obj->id.'">Delete</a>';
    
} 

