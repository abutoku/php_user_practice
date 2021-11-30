<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録</title>
</head>

<body>
  <a href="user_list.php">ユーザーリスト(一覧画面)</a>
  <form action="user_create.php" method="post">
    <fieldset>
      <legend>ユーザー登録</legend>

      <div>
        <!--nameはtodo-->
        name: <input type="text" name="username">
      </div>

      <div>
        <!--nameはpassword-->
        password: <input type="password" name="password">
      </div>

      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
</body>

</html>