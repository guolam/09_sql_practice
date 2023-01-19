<?php
session_start();
include('functions.php');
check_session_id();

$username = $_SESSION["username"];
$email = $_SESSION["email"];


$pdo = connect_to_db();


$sql = "SELECT * FROM todo_table WHERE username='$username' AND email='$email'";



?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（入力画面）</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>DB連携型todoリスト（入力画面）<?= $_SESSION["username"] ?>(<?= ["一般", "管理者"][$_SESSION["is_admin"]] ?>)</legend>
      <a href="todo_read.php">一覧画面</a>
      <a href="todo_logout.php">logout</a>
      <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        <input type="text" name="username" hidden>
        <input type="text" name="email" hidden>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>