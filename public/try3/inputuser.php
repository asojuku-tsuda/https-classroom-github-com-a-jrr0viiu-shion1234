<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
      <?php

// 名前
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    if (mb_strlen($username) > 20) {
        die("名前は20文字以内で入力してください。");
    }
    if (!mb_ereg("^[ぁ-んァ-ン一-龥ーa-zA-Z]+$", $username)) {
        die("名前は日本語または英字で入力してください。");
    }
    echo "名前：" . htmlspecialchars($username) . "<br>";
} else {
    echo "名前：未入力<br>";
}

// 住所
if (isset($_GET['useraddress'])) {
    $useraddress = $_GET['useraddress'];
    if (mb_strlen($useraddress) > 50) {
        die("住所は50文字以内で入力してください。");
    }
    if (!mb_ereg("^[ぁ-んァ-ン一-龥ーa-zA-Z0-9\s]+$", $useraddress)) {
        die("住所は日本語と英数字で入力してください。");
    }
    echo "住所：" . htmlspecialchars($useraddress) . "<br>";
} else {
    echo "住所：未入力<br>";
}

// メールアドレス
if (isset($_GET['usermail'])) {
    $usermail = $_GET['usermail'];
    if (mb_strlen($usermail) > 100) {
        die("メールアドレスは100文字以内で入力してください。");
    }
    if (!preg_match("/^[a-zA-Z0-9._\-@]+$/", $usermail)) {
        die("メールアドレスは半角英数字と .-_@ のみ利用可能です。");
    }
    echo "メールアドレス：" . htmlspecialchars($usermail) . "<br>";
} else {
    echo "メールアドレス：未入力<br>";
}
?>

    </h2>
    </div>
  </body>
</html>
