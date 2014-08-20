<?php

include 'includes/connect.php';

$query = "DELETE FROM users WHERE id='".(int)$_GET['id']."'";
$mysqli->query($query) or die("ustgaj chadsangui..".mysqli_error($mysqli));

header("Location: index.php");

echo $query;