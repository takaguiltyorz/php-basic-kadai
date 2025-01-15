<?php

session_start();


$name = isset($_SESSION['name']) ? $_SESSION['name'] : '' ;

?>




<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>phpwebapp</title>
</head>


<body>
    <h2><?php echo $name; ?>の登録が完了しました。</h2>
    <p>社員情報がデータベースに保存されました。</p>


    <button onclick="location.href='form.php';">戻る</button>



    <?php

    $_SESSION = array();


    session_destroy();

    ?>
</body>


</html>