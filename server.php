<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");

$file_text = file_get_contents('./todo.json');
$todo_list = json_decode($file_text);


header('Content-Type: application/json');
echo $file_text;
echo json_decode($todo_list);
?>