<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/custom.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php" enctype="multipart/form-data">
        <div class="jumbotron">
            <fieldset>
                <legend>審査申込み</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>Email：<input type="text" name="email"></label><br>
                <label>年齢：<input type="text" name="age"></label><br>
                <label>職業：<input type="text" name="occu"></label><br>
                <label>住まいエリア：<input type="text" name="address"></label><br>
                <label>応募理由：<textarea name="content" rows="4" cols="40"></textarea></label><br>
                <label>履歴書：<br><input type="file" id="image" name="image"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>

</html>
