<?php
header("Access-Control-Allow-Origin:*");

$dsn = "mysql:host=localhost;dbname=todo";
$username = "root";
$password = "";

try{
    $connection = new PDO($dsn, $username, $password);
}catch(Exception $exception){
    print_r($exception);
}

$content = file_get_contents("php://input");
$task = json_decode($content);

$id = $task->id;
$status = $task->status;

try {
  $sqlQuery = "UPDATE tasks SET status = '$status' WHERE id = $id";
  $result = $connection->query($sqlQuery, PDO::FETCH_OBJ);
  if ($result){
    echo "El registro se actualizo correctamente";
  } else {
    echo "Error, no se pudo actualizar";
  }

} catch (Exception $error) {
  print_r($error);
}